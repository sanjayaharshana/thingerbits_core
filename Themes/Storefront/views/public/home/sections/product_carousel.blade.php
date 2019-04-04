@if ($products->isNotEmpty())
    <section class="product-slider-wrapper clearfix">
        <div class="section-header">
            <h3>{{ $title }}</h3>
        </div>

        <div class="row">
            <div class="product-slider slick-arrow separator clearfix">
                @foreach ($products as $product)
                    <div class="col-md-3">
                        @include('public.products.partials.product_card')
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
