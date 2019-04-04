<?php

namespace Modules\Cart\Http\Controllers;

use Modules\Cart\Facades\Cart;
use Illuminate\Routing\Controller;
use Modules\Shipping\Facades\ShippingMethod;

class CartShippingMethodController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $shippingMethod = ShippingMethod::get(request('shipping_method'));

        Cart::addShippingMethod($shippingMethod);

        return response()->json([
            'discount' => Cart::discount()->convertToCurrentCurrency()->format(),
            'total' => Cart::total()->convertToCurrentCurrency()->format(),
        ]);
    }
}
