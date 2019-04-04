@if ($recentProducts->isNotEmpty())
    <section class="section-wrapper clearfix">
        <div class="section-header">
            <h3>{{ setting('storefront_recent_products_section_title') }}</h3>
        </div>

        <div class="recent-products">
            <div class="row">
                <div class="grid-products separator">
                    @each('public.products.partials.product_card', $recentProducts, 'product')
                </div>
            </div>
        </div>
    </section>
@endif
