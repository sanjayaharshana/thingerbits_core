<?php

namespace Modules\Cart\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Modules\Cart\Facades\Cart;

class CheckCartStock
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
        foreach (Cart::items() as $cartItem) {
            if ($cartItem->isNotAvailable()) {
                return $this->redirectToCartWithError($cartItem);
            }
        }
        
        return $next($request);
    }

    /**
     * Return a redirect response to the cart with error message.
     *
     * @param \Modules\Cart\CartItem $cartItem
     * @return \Illuminate\Http\Response
     */
    private function redirectToCartWithError($cartItem)
    {
        return redirect()->route('cart.index')->with('error', trans('cart::messages.not_have_enough_quantity_in_stock', [
            'stock' => $cartItem->product->qty,
            'name' => $cartItem->product->name,
        ]));
    }
}
