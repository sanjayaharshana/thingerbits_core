<?php

namespace Modules\Compare;

use Modules\Product\Entities\Product;
use Darryldecode\Cart\Cart as DarryldecodeCart;

class Compare extends DarryldecodeCart
{
    private $products;

    public function store($productId)
    {
        $product = Product::with('files', 'attributes.attribute')
            ->withCount('options')
            ->findOrFail($productId);

        return $this->add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->selling_price->amount(),
            'quantity' => 1,
            'attributes' => compact('product'),
        ]);
    }

    public function hasAnyProduct()
    {
        return $this->products()->isNotEmpty();
    }

    public function count()
    {
        return $this->products()->count();
    }

    public function products()
    {
        if (! is_null($this->products)) {
            return $this->products;
        }

        return $this->products = $this->getContent()->map(function ($item) {
            return $item->attributes->product;
        });
    }

    public function attributes()
    {
        return $this->products()->flatMap->attributes->unique('name');
    }
}
