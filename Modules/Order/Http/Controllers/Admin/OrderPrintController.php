<?php

namespace Modules\Order\Http\Controllers\Admin;

use Modules\Order\Entities\Order;
use Illuminate\Routing\Controller;

class OrderPrintController extends Controller
{
    /**
     * Show the specified resource.
     *
     * @param \Modules\Order\Entities\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $order->load('products', 'coupon', 'taxes');

        return view('order::admin.orders.print.show', compact('order'));
    }
}
