<?php

namespace Modules\Coupon\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Coupon\Entities\Coupon;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Coupon\Http\Requests\SaveCouponRequest;

class CouponController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = Coupon::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'coupon::coupons.coupon';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'coupon::admin.coupons';

    /**
     * Form requests for the resource.
     *
     * @var array|string
     */
    protected $validation = SaveCouponRequest::class;
}
