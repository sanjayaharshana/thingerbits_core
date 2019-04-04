<?php

namespace Modules\Coupon\Checkers;

use Closure;
use Modules\Cart\Facades\Cart;
use Modules\Coupon\Exceptions\MinimumSpendException;

class MinimumSpend
{
    public function handle($coupon, Closure $next)
    {
        if ($this->hasMinimumSpend($coupon) && $this->didNotSpendTheRequiredAmount($coupon)) {
            throw new MinimumSpendException($coupon->minimum_spend);
        }

        return $next($coupon);
    }

    private function hasMinimumSpend($coupon)
    {
        return ! is_null($coupon->minimum_spend);
    }

    private function didNotSpendTheRequiredAmount($coupon)
    {
        return Cart::subTotal()->lessThan($coupon->minimum_spend);
    }
}
