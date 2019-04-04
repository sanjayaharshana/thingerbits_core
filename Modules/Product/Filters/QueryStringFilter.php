<?php

namespace Modules\Product\Filters;

use Modules\Attribute\Entities\Attribute;
use Modules\Attribute\Entities\AttributeValue;

class QueryStringFilter
{
    private $sorts = [
        'relevance' => 'relevance',
        'toprated' => 'topRated',
        'latest' => 'latest',
        'pricelowtohigh' => 'priceLowToHigh',
        'pricehightolow' => 'priceHighToLow',
    ];

    public function sort($query, $sortType)
    {
        if ($this->sortTypeExists($sortType)) {
            return $this->{$sortType}($query);
        }

        return $query;
    }

    private function sortTypeExists($sortType)
    {
        return array_key_exists(strtolower($sortType), $this->sorts);
    }

    public function relevance($query)
    {
        return $query;
    }

    public function topRated($query)
    {
        return $query->leftJoin('reviews', 'products.id', '=', 'reviews.product_id')
            ->selectRaw('AVG(reviews.rating) as avg_rating')
            ->groupBy([
                'products.id',
                'slug',
                'price',
                'special_price',
                'selling_price',
                'special_price_start',
                'special_price_end',
                'in_stock',
                'new_from',
                'new_to',
            ])
            ->orderByDesc('avg_rating');
    }

    public function latest($query)
    {
        $query->latest();
    }

    public function priceLowToHigh($query)
    {
        return $query->orderBy('selling_price');
    }

    public function priceHighToLow($query)
    {
        return $query->orderByDesc('selling_price');
    }

    public function fromPrice($query, $price)
    {
        return $query->where('selling_price', '>=', $price);
    }

    public function toPrice($query, $price)
    {
        return $query->where('selling_price', '<=', $price);
    }

    public function category($query, $slug)
    {
        return $query->whereHas('categories', function ($categoryQuery) use ($slug) {
            $categoryQuery->where('slug', $slug);
        });
    }

    public function attribute($query, $attributeFilters)
    {
        foreach ($this->getAttributeIds($attributeFilters) as $index => $attributeId) {
            $query->join("product_attributes as pa_{$index}", 'products.id', '=', "pa_{$index}.product_id")
                ->whereRaw("pa_{$index}.attribute_id = {$attributeId} AND EXISTS (
                    SELECT * FROM `product_attribute_values`
                        WHERE `pa_{$index}`.`id` = `product_attribute_values`.`product_attribute_id`
                        AND `attribute_value_id` in ({$this->getAttributeValueIds($attributeFilters)})
                )");
        }

        return $query;
    }

    private function getAttributeIds($attributeFilters)
    {
        return Attribute::whereTranslationIn('name', array_keys($attributeFilters))->pluck('id');
    }

    private function getAttributeValueIds($attributeFilters)
    {
        return once(function () use ($attributeFilters) {
            return AttributeValue::whereTranslationIn('value', array_flatten($attributeFilters))
                ->pluck('id')
                ->implode(',');
        });
    }
}
