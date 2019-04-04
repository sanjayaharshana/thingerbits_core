<?php

namespace Themes\Storefront\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Modules\Product\Entities\Product;
use Modules\Category\Entities\Category;
use Modules\Attribute\Entities\Attribute;

class ProductsFilterComposer
{
    /**
     * Bind data to the view.
     *
     * @param \Illuminate\View\View $view
     * @return void
     */
    public function compose($view)
    {
        $view->with([
            'categories' => $this->categories(),
            'attributes' => $this->attributes($view),
            'maxPrice' => $this->maxPrice(),
        ]);
    }

    private function categories()
    {
        return Category::tree();
    }

    private function attributes($view)
    {
        return Attribute::with('values')
            ->where('is_filterable', true)
            ->whereHas('categories', function ($query) use ($view) {
                $query->whereIn('id', $this->getProductsCategoryIds($view));
            })
            ->get();
    }

    private function getProductsCategoryIds($view)
    {
        return DB::table('product_categories')
            ->whereIn('product_id', $view['productIds'])
            ->distinct()
            ->pluck('category_id');
    }

    private function maxPrice()
    {
        return Product::max('selling_price');
    }
}
