<section class="section-wrapper clearfix">
    <div class="row">
        @if ($twoColumnCarouselProducts['column_1']->isNotEmpty())
            <div class="col-md-4">
                @include('public.home.sections.partials.vertical_products', ['title' => setting('storefront_two_column_product_carousel_section_column_1_title'), 'products' => $twoColumnCarouselProducts['column_1']])
            </div>
        @endif

        @if ($twoColumnCarouselProducts['column_2']->isNotEmpty())
            <div class="col-md-8">
                <div class="product-slider-wrapper-2">
                    <div class="section-header">
                        <h3>{{ setting('storefront_two_column_product_carousel_section_column_2_title') }}</h3>
                    </div>

                    <div class="row">
                        <div class="product-slider-2 slick-arrow separator clearfix">
                            @foreach ($twoColumnCarouselProducts['column_2'] as $product)
                                <div class="col-md-3">
                                    @include('public.products.partials.product_card')
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
