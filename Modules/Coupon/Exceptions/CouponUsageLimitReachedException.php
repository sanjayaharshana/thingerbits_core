<?php

namespace Modules\Coupon\Exceptions;

use Exception;

class CouponUsageLimitReachedException extends Exception
{
    /**
     * Render the exception into an HTTP response.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return redirect()->route('cart.index')->withInput()
            ->with('error', trans('coupon::messages.usage_limit_reached'));
    }
}
