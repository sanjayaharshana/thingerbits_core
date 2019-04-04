<?php

namespace Modules\Coupon\Checkers;

use Closure;
use Modules\Cart\Facades\Cart;
use Modules\Coupon\Exceptions\MaximumSpendException;

class MaximumSpend
{
    public function handle($coupon, Closure $next)
    {
        if ($this->hasMaximumSpend($coupon) && $this->spentMoreThanMaximumAmount($coupon)) {
            throw new MaximumSpendException($coupon->maximum_spend);
        }

        return $next($coupon);
    }

    private function hasMaximumSpend($coupon)
    {
        return ! is_null($coupon->maximum_spend);
    }

    private function spentMoreThanMaximumAmount($coupon)
    {
        return Cart::subTotal()->greaterThan($coupon->maximum_spend);
    }
}
