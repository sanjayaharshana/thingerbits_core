<?php

namespace Modules\Order\Http\Controllers\Admin;

use Modules\Order\Entities\Order;
use Illuminate\Routing\Controller;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Order\Http\Requests\SaveOrderRequest;

class OrderController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['products', 'coupon', 'taxes'];

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'order::orders.order';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'order::admin.orders';

    /**
     * Form requests for the resource.
     *
     * @var array
     */
    protected $validation = SaveOrderRequest::class;
}
