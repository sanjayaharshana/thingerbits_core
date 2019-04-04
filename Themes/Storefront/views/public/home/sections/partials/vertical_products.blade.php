<div class="vertical-products-wrapper">
    <div class="section-header">
        <h3>{{ $title }}</h3>
    </div>

    <div class="vertical-products">
        @foreach($products->chunk(3) as $chunk)
            <div class="vertical-products-inner">
                @foreach ($chunk as $product)
                    @include('public.products.partials.single_product')
                @endforeach
            </div>
        @endforeach
    </div>
</div>
