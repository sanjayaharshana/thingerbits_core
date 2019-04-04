<?php

namespace Modules\Cart\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Modules\Product\Entities\Product;

class CheckProductIsInStock
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $product = Product::withName()
            ->addSelect('id', 'in_stock', 'manage_stock', 'qty')
            ->where('id', $request->product_id)
            ->firstOrFail();

        if ($product->isOutOfStock()) {
            return back()->with('error', trans('cart::messages.out_of_stock'));
        }

        if (! $product->hasStockFor($request->qty)) {
            return back()->with('error', trans('cart::messages.not_have_enough_quantity_in_stock', [
                'stock' => $product->qty,
                'name' => $product->name,
            ]));
        }

        return $next($request);
    }
}
