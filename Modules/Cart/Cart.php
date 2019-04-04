<?php

namespace Modules\Cart;

use Modules\Support\Money;
use Modules\Tax\Entities\TaxRate;
use Illuminate\Support\Collection;
use Modules\Coupon\Entities\Coupon;
use Modules\Product\Entities\Product;
use Modules\Shipping\Facades\ShippingMethod;
use Darryldecode\Cart\Cart as DarryldecodeCart;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

class Cart extends DarryldecodeCart
{
    /**
     * Collection of all cart item.
     *
     * @var \Illuminate\Support\Collection
     */
    private $items;

    /**
     * Holds the cart shipping method.
     *
     * @var \Modules\Cart\CartShippingMethod
     */
    private $shippingMethod;

    /**
     * Holds the cart coupon.
     *
     * @var \Modules\Cart\CartCoupon
     */
    private $coupon;

    /**
     * Collection of cart taxes.
     *
     * @var \Illuminate\Support\Collection
     */
    private $taxes;

    /**
     * Get the current instance.
     *
     * @return $this
     */
    public function instance()
    {
        return $this;
    }

    /**
     * Clear the cart.
     *
     * @return void
     */
    public function clear()
    {
        parent::clear();

        $this->clearCartConditions();
    }

    /**
     * Store a new item to the cart.
     *
     * @param int $productId
     * @param int $qty
     * @param array $options
     * @return $this
     */
    public function store($productId, $qty, $options = [])
    {
        $product = Product::with('files', 'categories', 'taxClass')->findOrFail($productId);
        $options = array_filter($options);

        return $this->add([
            'id' => "product_id.{$product->id}:options." . serialize($options),
            'name' => $product->name,
            'price' => $product->selling_price->amount(),
            'quantity' => $qty,
            'attributes' => [
                'product' => $product,
                'options' => $this->options($product, $options),
            ],
        ]);
    }

    private function options($product, $options)
    {
        return $product->options()
            ->with(['values' => function ($query) use ($options) {
                $query->whereIn('id', array_flatten($options));
            }])
            ->whereIn('id', array_keys($options))
            ->get();
    }

    public function updateQuantity($id, $qty)
    {
        $this->update($id, [
            'quantity' => [
                'relative' => false,
                'value' => $qty,
            ],
        ]);
    }

    public function items()
    {
        if (! is_null($this->items)) {
            return $this->items;
        }

        return $this->items = $this->getContent()->map(function ($item) {
            return new CartItem($item);
        });
    }

    public function crossSellProducts()
    {
        return $this->getAllProducts()->load(['crossSellProducts' => function ($query) {
            $query->forCard();
        }])->pluck('crossSellProducts')->flatten();
    }

    public function getAllProducts()
    {
        return $this->items()->map(function ($cartItem) {
            return $cartItem->product;
        })->flatten()->pipe(function ($products) {
            return new EloquentCollection($products);
        });
    }

    public function reduceStock()
    {
        $this->manageStock(function ($cartItem) {
            $cartItem->product->decrement('qty', $cartItem->qty);
        });
    }

    public function restoreStock()
    {
        $this->manageStock(function ($cartItem) {
            $cartItem->product->increment('qty', $cartItem->qty);
        });
    }

    private function manageStock($callback)
    {
        $this->items()->filter(function ($cartItem) {
            return $cartItem->product->manage_stock;
        })->each($callback);
    }

    public function quantity()
    {
        return $this->getTotalQuantity();
    }

    public function hasAvailableShippingMethod()
    {
        return $this->availableShippingMethods()->isNotEmpty();
    }

    public function hasNoAvailableShippingMethod()
    {
        return ! $this->hasAvailableShippingMethod();
    }

    public function availableShippingMethods()
    {
        return ShippingMethod::available();
    }

    public function hasShippingMethod()
    {
        return $this->getConditionsByType('shipping_method')->isNotEmpty();
    }

    public function shippingMethod()
    {
        if (! $this->hasShippingMethod()) {
            return new NullCartShippingMethod;
        }

        if (! is_null($this->shippingMethod)) {
            return $this->shippingMethod;
        }

        $shippingMethodCondition = $this->getConditionsByType('shipping_method')->first();

        return $this->shippingMethod = new CartShippingMethod($this, $shippingMethodCondition);
    }

    public function shippingCost()
    {
        return $this->shippingMethod()->cost();
    }

    public function addShippingMethod($shippingMethod)
    {
        $this->removeOldShippingMethod();

        $this->condition(new CartCondition([
            'name' => $shippingMethod->label,
            'type' => 'shipping_method',
            'target' => 'total',
            'value' => "+{$shippingMethod->cost->amount()}",
            'order' => 1,
            'attributes' => [
                'shipping_method' => $shippingMethod,
            ],
        ]));

        $this->refreshFreeShippingCoupon();

        return $this->shippingMethod();
    }

    public function removeOldShippingMethod()
    {
        $this->removeConditionsByType('shipping_method');
    }

    private function refreshFreeShippingCoupon()
    {
        if ($this->coupon()->isFreeShipping()) {
            $this->applyCoupon($this->coupon()->entity());
        }
    }

    public function hasCoupon()
    {
        if ($this->getConditionsByType('coupon')->isEmpty()) {
            return false;
        }

        $couponId = $this->getConditionsByType('coupon')->first()->getAttribute('coupon_id');

        return Coupon::where('id', $couponId)->exists();
    }

    public function coupon()
    {
        if (! $this->hasCoupon()) {
            return new NullCartCoupon;
        }

        if (! is_null($this->coupon)) {
            return $this->coupon;
        }

        $couponCondition = $this->getConditionsByType('coupon')->first();

        $coupon = Coupon::with('products', 'categories')->find($couponCondition->getAttribute('coupon_id'));

        return $this->coupon = new CartCoupon($this, $coupon, $couponCondition);
    }

    public function discount()
    {
        return $this->coupon()->value();
    }

    public function applyCoupon($coupon)
    {
        $this->removeOldCoupon();

        $this->condition(new CartCondition([
            'name' => $coupon->code,
            'type' => 'coupon',
            'target' => 'total',
            'value' => $this->getCouponValue($coupon),
            'order' => 2,
            'attributes' => [
                'coupon_id' => $coupon->id,
            ],
        ]));

        return $this->coupon();
    }

    private function getCouponValue($coupon)
    {
        if ($coupon->free_shipping) {
            return "-{$this->shippingMethod()->cost()->amount()}";
        }

        if ($coupon->is_percent) {
            return "-{$coupon->value}%";
        }

        return "-{$coupon->value->amount()}";
    }

    public function removeOldCoupon()
    {
        $this->removeConditionsByType('coupon');
    }

    public function hasTax()
    {
        return $this->getConditionsByType('tax')->isNotEmpty();
    }

    public function taxes()
    {
        if (! $this->hasTax()) {
            return new Collection;
        }

        if (! is_null($this->taxes)) {
            return $this->taxes;
        }

        $taxConditions = $this->getConditionsByType('tax');

        $taxRates = TaxRate::whereIn('id', $this->getTaxRateIds($taxConditions))->get();

        return $this->taxes = $taxConditions->map(function ($taxCondition) use ($taxRates) {
            $taxRate = $taxRates->where('id', $taxCondition->getAttribute('tax_rate_id'))->first();

            return new CartTax($this, $taxRate, $taxCondition);
        });
    }

    private function getTaxRateIds($taxConditions)
    {
        return $taxConditions->map(function ($taxCondition) {
            return $taxCondition->getAttribute('tax_rate_id');
        });
    }

    public function tax()
    {
        return Money::inDefaultCurrency($this->calculateTax());
    }

    private function calculateTax()
    {
        return $this->taxes()->sum(function ($cartTax) {
            return $cartTax->amount()->amount();
        });
    }

    public function addTaxes($request)
    {
        $this->removeOldTaxes();

        $this->findTaxes($request)->each(function ($taxRate) {
            $this->condition(new CartCondition([
                'name' => $taxRate->id,
                'type' => 'tax',
                'target' => 'total',
                'value' => "+{$taxRate->rate}%",
                'order' => 3,
                'attributes' => [
                    'tax_rate_id' => $taxRate->id,
                ],
            ]));
        });

        return $this->taxes();
    }

    public function removeOldTaxes()
    {
        $this->removeConditionsByType('tax');
    }

    private function findTaxes($request)
    {
        return $this->items()
            ->groupBy('tax_class_id')
            ->flatten()
            ->map(function ($cartItem) use ($request) {
                return $cartItem->findTax($request->only(['billing', 'shipping']));
            })
            ->filter();
    }

    public function subTotal()
    {
        return Money::inDefaultCurrency($this->getSubTotal())
            ->add($this->optionsPrice());
    }

    private function optionsPrice()
    {
        return Money::inDefaultCurrency($this->calculateOptionsPrice());
    }

    private function calculateOptionsPrice()
    {
        return $this->items()->sum(function ($cartItem) {
            return $cartItem->optionsPrice()->multiply($cartItem->qty)->amount();
        });
    }

    public function total()
    {
        return $this->subTotal()
            ->add($this->shippingMethod()->cost())
            ->subtract($this->coupon()->value())
            ->add($this->tax());
    }
}
