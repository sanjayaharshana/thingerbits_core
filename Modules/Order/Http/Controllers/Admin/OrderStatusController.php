<?php

namespace Modules\Order\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Modules\Order\Entities\Order;
use Illuminate\Routing\Controller;

class OrderStatusController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param \Modules\Order\Entities\Order $request
     * @return \Illuminate\Http\Response
     */
    public function update(Order $order)
    {
        $order->update(['status' => request('status')]);

        return trans('order::messages.status_updated');
    }
}
