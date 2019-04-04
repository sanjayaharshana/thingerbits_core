<?php

namespace Modules\Coupon\Http\Controllers;

use Modules\Cart\Facades\Cart;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Routing\Controller;
use Modules\Coupon\Entities\Coupon;
use Modules\Coupon\Checkers\ValidCoupon;
use Modules\Coupon\Checkers\CouponExists;
use Modules\Coupon\Checkers\MaximumSpend;
use Modules\Coupon\Checkers\MinimumSpend;
use Modules\Coupon\Checkers\ExcludedProducts;
use Modules\Coupon\Checkers\ApplicableProducts;
use Modules\Coupon\Checkers\ExcludedCategories;
use Modules\Coupon\Checkers\UsageLimitPerCoupon;
use Modules\Coupon\Checkers\ApplicableCategories;
use Modules\Coupon\Checkers\UsageLimitPerCustomer;

class CartCouponController extends Controller
{
    private $checkers = [
        CouponExists::class,
        ValidCoupon::class,
        MinimumSpend::class,
        MaximumSpend::class,
        ApplicableProducts::class,
        ExcludedProducts::class,
        ApplicableCategories::class,
        ExcludedCategories::class,
        UsageLimitPerCoupon::class,
        UsageLimitPerCustomer::class,
    ];

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $coupon = Coupon::where('code', request('coupon'))->first();

        resolve(Pipeline::class)
            ->send($coupon)
            ->through($this->checkers)
            ->then(function ($coupon) {
                Cart::applyCoupon($coupon);
            });

        return back()->withSuccess(trans('coupon::messages.applied'));
    }
}
