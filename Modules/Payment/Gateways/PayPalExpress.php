<?php

namespace Modules\Payment\Gateways;

use Omnipay\Omnipay;
use Modules\Cart\Facades\Cart;
use Omnipay\Common\CreditCard;

class PayPalExpress
{
    public $label;
    public $description;

    public function __construct()
    {
        $this->label = setting('paypal_express_label');
        $this->description = setting('paypal_express_description');
    }

    public function gateway()
    {
        return tap(Omnipay::create('PayPal_Express'), function ($gateway) {
            $gateway->setUsername(setting('paypal_express_username'));
            $gateway->setPassword(setting('paypal_express_password'));
            $gateway->setSignature(setting('paypal_express_signature'));
            $gateway->setTestMode(setting('paypal_express_test_mode'));
            $gateway->setBrandName(setting('store_name'));
        });
    }

    public function purchase($order)
    {
        return $this->gateway()
            ->purchase([
                'transactionId' => $order->id,
                'amount' => Cart::total()->round()->amount(),
                'currency' => setting('default_currency'),
                'localeCode' => locale(),
                'items' => $this->items(),
                'noShipping' => 2,
                'addressOverride' => 1,
                'card' => $this->card($order),
                'cancelUrl' => $this->getCancelUrl($order),
                'returnUrl' => $this->getReturnUrl($order),
            ])
            ->send();
    }

    public function complete($order)
    {
        return $this->gateway()
            ->completePurchase([
                'transactionId' => $order->id,
                'amount' => $order->total->round()->amount(),
                'currency' => setting('default_currency'),
                'localeCode' => $order->locale,
                'items' => $this->items(),
                'cancelUrl' => $this->getCancelUrl($order),
                'returnUrl' => $this->getReturnUrl($order),
            ])
            ->send();
    }

    private function items()
    {
        return Cart::items()->map(function ($cartItem) {
            return [
                'name' => $cartItem->product->translate(setting('default_locale'))->name,
                'description' => $this->getCartItemOptions($cartItem),
                'quantity' => $cartItem->qty,
                'price' => $cartItem->unitPrice()->round()->amount(),
            ];
        })
        ->when(Cart::hasShippingMethod(), function ($items) {
            return $this->pushShippingMethodItem($items);
        })
        ->when(Cart::hasCoupon(), function ($items) {
            return $this->pushCouponItem($items);
        })
        ->when(Cart::hasTax(), function ($items) {
            return $this->pushTaxItems($items);
        })
        ->all();
    }

    private function getCartItemOptions($cartItem)
    {
        $formatted = '';

        foreach ($cartItem->options as $option) {
            $formatted .= "{$option->name}: {$option->values->implode('label', ', ')} | ";
        }

        return rtrim($formatted, ' | ');
    }

    private function pushShippingMethodItem($items)
    {
        return $items->push([
            'name' => Cart::shippingMethod()->label(),
            'description' => trans('order::orders.shipping_method'),
            'quantity' => 1,
            'price' => Cart::shippingCost()->round()->amount(),
        ]);
    }

    private function pushCouponItem($items)
    {
        return $items->push([
            'name' => trans('order::orders.coupon'),
            'description' => Cart::coupon()->code(),
            'quantity' => 1,
            'price' => '-' . Cart::discount()->round()->amount(),
        ]);
    }

    private function pushTaxItems($items)
    {
        Cart::taxes()->each(function ($cartTax) use ($items) {
            $items->push([
                'name' => $cartTax->name(),
                'description' => trans('order::orders.tax'),
                'quantity' => 1,
                'price' => $cartTax->amount()->round()->amount(),
            ]);
        });

        return $items;
    }

    private function card($order)
    {
        return new CreditCard([
            'email' => $order->customer_email,
            'firstName' => $order->customer_first_name,
            'lastName' => $order->customer_last_name,
            'billingPhone' => $order->customer_phone,
            'billingAddress1' => $order->shipping_address_1,
            'billingAddress2' => $order->shipping_address_2,
            'billingCity' => $order->shipping_city,
            'billingState' => $order->shipping_state,
            'billingCountry' => $order->shipping_country,
            'billingPostCode' => $order->shipping_zip,
        ]);
    }

    private function getCancelUrl($order)
    {
        return route('checkout.payment_canceled.store', $order);
    }

    private function getReturnUrl($order)
    {
        return route('checkout.complete.store', [$order->id, 'paypal_express']);
    }
}
