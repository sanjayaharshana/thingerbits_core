<?php

namespace Modules\Report;

use Modules\Order\Entities\Order;

class SalesReport extends Report
{
    protected function view()
    {
        return 'report::admin.reports.sales_report.index';
    }

    protected function query()
    {
        return Order::selectRaw('MIN(created_at) as start_date')
            ->selectRaw('MAX(created_at) as end_date')
            ->selectRaw('COUNT(*) as total_orders')
            ->leftJoin('order_products', 'orders.id', '=', 'order_products.order_id')
            ->selectRaw('SUM(order_products.qty) as total_products')
            ->selectRaw('SUM(sub_total) as sub_total')
            ->selectRaw('SUM(shipping_cost) as shipping_cost')
            ->selectRaw('SUM(discount) as discount')
            ->leftJoin('order_taxes', 'orders.id', '=', 'order_taxes.order_id')
            ->selectRaw('SUM(order_taxes.amount) as tax')
            ->selectRaw('SUM(orders.total) as total');
    }

    protected function reportData($report)
    {
        if ($this->hasEmptyRecords($report)) {
            $report->getCollection()->shift();
        }
    }

    private function hasEmptyRecords($report)
    {
        return $report->getCollection()->first()->total_orders === 0;
    }
}
