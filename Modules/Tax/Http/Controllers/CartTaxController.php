<?php

namespace Modules\Tax\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Cart\Facades\Cart;
use Illuminate\Routing\Controller;

class CartTaxController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->mergeShippingAddress($request);

        $taxes = Cart::addTaxes($request);

        return response()->json([
            'taxes' => $this->mapTaxes($taxes),
            'total' => Cart::total()->convertToCurrentCurrency()->format(),
        ]);
    }

    private function mergeShippingAddress($request)
    {
        $request->merge([
            'shipping' => $request->ship_to_a_different_address ? $request->shipping : $request->billing,
        ]);
    }

    private function mapTaxes($taxes)
    {
        return $taxes->map(function ($carTax) {
            return [
                'name' => $carTax->name(),
                'amount' => $carTax->amount()->convertToCurrentCurrency()->format(),
            ];
        })->values();
    }
}
