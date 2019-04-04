<?php

namespace Modules\Product\Admin;

use Modules\Admin\Ui\AdminTable;

class ProductTable extends AdminTable
{
    /**
     * Raw columns that will not be escaped.
     *
     * @var array
     */
    protected $rawColumns = ['price'];

    /**
     * Make table response for the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function make()
    {
        return $this->newTable()
            ->editColumn('thumbnail', function ($product) {
                $path = optional($product->base_image)->path;

                return view('product::admin.products.partials.table.thumbnail', compact('path'));
            })
            ->editColumn('price', function ($product) {
                if (! $product->hasSpecialPrice()) {
                    return $product->price->format();
                }

                return "<span class='m-r-5'>{$product->special_price->format()}</span>
                    <del class='text-red'>{$product->price->format()}</del>";
            });
    }
}
