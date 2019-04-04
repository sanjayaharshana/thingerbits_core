<section class="tab-products clearfix">
    <div class="section-header clearfix">
        <h3 class="pull-left">{{ setting('storefront_product_tabs_section_title') }}</h3>

        <ul class="nav nav-tabs pull-right">
            @if ($tabProducts['tab_1']->isNotEmpty())
                <li class="active">
                    <a data-toggle="tab" href="#tab-1">{{ setting('storefront_product_tabs_section_tab_1_title') }}</a>
                </li>
            @endif

            @if ($tabProducts['tab_2']->isNotEmpty())
                <li>
                    <a data-toggle="tab" href="#tab-2">{{ setting('storefront_product_tabs_section_tab_2_title') }}</a>
                </li>
            @endif

            @if ($tabProducts['tab_3']->isNotEmpty())
                <li>
                    <a data-toggle="tab" href="#tab-3">{{ setting('storefront_product_tabs_section_tab_3_title') }}</a>
                </li>
            @endif

            @if ($tabProducts['tab_4']->isNotEmpty())
                <li>
                    <a data-toggle="tab" href="#tab-4">{{ setting('storefront_product_tabs_section_tab_4_title') }}</a>
                </li>
            @endif
        </ul>
    </div>

    <div class="row">
        <div class="tab-content">
            @if ($tabProducts['tab_1']->isNotEmpty())
                <div id="tab-1" class="tab-pane fade in active">
                    <div class="tab-product-slider separator clearfix">
                        @foreach ($tabProducts['tab_1'] as $product)
                            <div class="col-md-3">
                                @include('public.products.partials.product_card')
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($tabProducts['tab_2']->isNotEmpty())
                <div id="tab-2" class="tab-pane fade in">
                    <div class="tab-product-slider separator clearfix">
                        @foreach ($tabProducts['tab_2'] as $product)
                            <div class="col-md-3">
                                @include('public.products.partials.product_card')
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($tabProducts['tab_3']->isNotEmpty())
                <div id="tab-3" class="tab-pane fade in">
                    <div class="tab-product-slider separator clearfix">
                        @foreach ($tabProducts['tab_3'] as $product)
                            <div class="col-md-3">
                                @include('public.products.partials.product_card')
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($tabProducts['tab_4']->isNotEmpty())
                <div id="tab-4" class="tab-pane fade in">
                    <div class="tab-product-slider separator clearfix">
                        @foreach ($tabProducts['tab_4'] as $product)
                            <div class="col-md-3">
                                @include('public.products.partials.product_card')
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
