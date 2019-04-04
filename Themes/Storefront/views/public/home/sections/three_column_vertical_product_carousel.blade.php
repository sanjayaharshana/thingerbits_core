<section class="section-wrapper clearfix">
    <div class="row">
        @if ($threeColumnCarouselProducts['column_1']->isNotEmpty())
            <div class="col-md-4">
                @include('public.home.sections.partials.vertical_products', ['title' => setting("storefront_three_column_vertical_product_carousel_section_column_1_title"), 'products' => $threeColumnCarouselProducts['column_1']])
            </div>
        @endif

        @if ($threeColumnCarouselProducts['column_2']->isNotEmpty())
            <div class="col-md-4">
                @include('public.home.sections.partials.vertical_products', ['title' => setting("storefront_three_column_vertical_product_carousel_section_column_2_title"), 'products' => $threeColumnCarouselProducts['column_2']])
            </div>
        @endif

        @if ($threeColumnCarouselProducts['column_3']->isNotEmpty())
            <div class="col-md-4">
                @include('public.home.sections.partials.vertical_products', ['title' => setting("storefront_three_column_vertical_product_carousel_section_column_3_title"), 'products' => $threeColumnCarouselProducts['column_3']])
            </div>
        @endif
    </div>
</section>
