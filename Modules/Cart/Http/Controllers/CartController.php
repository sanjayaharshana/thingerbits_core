<?php

namespace Modules\Cart\Http\Controllers;

use Modules\Support\Country;
use Modules\Cart\Facades\Cart;
use Illuminate\Routing\Controller;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::instance();
        $countries = Country::supported();
        $number1 = rand(10,100);
        $number2 = rand(10,100);
        $number = $number1.$number2;

        return view('public.cart.index', compact('cart', 'countries', 'number'));
    }
}
