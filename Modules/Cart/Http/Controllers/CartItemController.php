<?php

namespace Modules\Cart\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Cart\Facades\Cart;
use Illuminate\Routing\Controller;
use Modules\Cart\Http\Requests\StoreCartItemRequest;

class CartItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('in_stock')->only('store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Modules\Cart\Http\Requests\StoreCartItemRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartItemRequest $request)
    {
        Cart::store($request->product_id, $request->qty, $request->options ?? []);

        return back()->withSuccess(trans('cart::messages.added'));
    }

    //thingerbits edit core
    public function buycoursecart(StoreCartItemRequest $request)
    {
        Cart::store($request->product_id, $request->qty, $request->options ?? []);

        return back()->withSuccess(trans('cart::messages.added'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param mixed $cartItemId
     * @return \Illuminate\Http\Response
     */
    public function update($cartItemId)
    {
        Cart::updateQuantity(decrypt($cartItemId), request('qty'));

        return back()->withSuccess(trans('cart::messages.quantity_updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param mixed $cartItemId
     * @return \Illuminhtate\Http\Response
     */
    public function destroy($cartItemId)
    {
        Cart::remove(decrypt($cartItemId));

        return back()->withSuccess(trans('cart::messages.removed'));
    }
}
