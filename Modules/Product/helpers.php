<?php

use Illuminate\Support\HtmlString;

if (! function_exists('product_price')) {
    /**
     * Get the selling price of the given product.
     *
     * @param \Modules\Product\Entities\Product $product
     * @param string $class
     * @return \Illuminate\Support\HtmlString|string
     */
    function product_price($product, $class = 'previous-price')
    {
        if (! $product->hasSpecialPrice()) {
            return $product->price->convertToCurrentCurrency()->format();
        }

        $price = $product->price->convertToCurrentCurrency()->format();
        $specialPrice = $product->special_price->convertToCurrentCurrency()->format();

        return new HtmlString("{$specialPrice} <span class='{$class}'>{$price}</span>");
    }
}
