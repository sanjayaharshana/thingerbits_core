<?php

namespace Modules\Checkout\Http\Controllers;

use Modules\Cart\Facades\Cart;
use Modules\Order\Entities\Order;
use Illuminate\Routing\Controller;

class PaymentCanceledController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param int $orderId
     * @param string $paymentMethod
     * @param \Modules\Checkout\Services\OrderService $orderService
     * @return \Illuminate\Http\Response
     */
    public function store($orderId)
    {
        Order::where('id', $orderId)->delete();

        Cart::restoreStock();

        return redirect()->route('checkout.create')
            ->withError(trans('order::messages.payment_canceled'));
    }
}
