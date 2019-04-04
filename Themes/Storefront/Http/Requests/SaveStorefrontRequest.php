<?php

namespace Themes\Storefront\Http\Requests;

use Modules\Core\Http\Requests\Request;

class SaveStorefrontRequest extends Request
{
    /**
     * Array of attributes that should be merged with null
     * if attribute is not found in the current request.
     *
     * @var array
     */
    private $shouldCheck = [
        'storefront_product_carousel_section_products',
        'storefront_three_column_vertical_product_carousel_section_column_2_products',
        'storefront_landscape_products_section_products',
        'storefront_product_tabs_section_tab_1_products',
        'storefront_product_tabs_section_tab_2_products',
        'storefront_product_tabs_section_tab_3_products',
        'storefront_product_tabs_section_tab_4_products',
        'storefront_two_column_product_carousel_section_column_1_products',
        'storefront_two_column_product_carousel_section_column_2_products',
    ];

    /**
     * Get data to be validated from the request.
     *
     * @return array
     */
    protected function validationData()
    {
        foreach ($this->shouldCheck as $attribute) {
            if (! $this->has($attribute)) {
                $this->merge([$attribute => null]);
            }
        }

        return $this->all();
    }
}
