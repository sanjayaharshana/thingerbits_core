<div class="col-md-3 col-sm-12">
    <div class="product-list-sidebar clearfix">
        @include('public.products.partials.category_filter')

        <form method="GET" action="{{ route('products.index') }}" id="product-filter-form">
            @foreach (request()->except(['attribute', 'fromPrice', 'toPrice']) as $query => $value)
                @if (! is_array($value))
                    <input type="hidden" name="{{ $query }}" value="{{ $value }}">
                @endif
            @endforeach

            @foreach ($attributes as $attribute)
                <div class="filter-section clearfix">
                    <h4>{{ $attribute->name }}</h4>

                    <div class="{{ $attribute->values->count() > 5 ? 'filter-scroll' : '' }}">
                        @foreach ($attribute->values as $value)
                            <div class="filter-options">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input type="checkbox"
                                            name="attribute[{{ mb_strtolower($attribute->name) }}][]"
                                            value="{{ mb_strtolower($value->value) }}"
                                            id="attribute-{{ $value->id }}"
                                            {{ is_filtering($value->value) ? 'checked' : '' }}
                                        >

                                        <label for="attribute-{{ $value->id }}">{{ $value->value }}</label>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="price-range-picker">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <label for="price-from">{{ trans('storefront::products.from') }}</label>
                            <input type="text" name="fromPrice" class="from-control range-from" id="price-from">
                        </div>

                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <label for="price-to">{{ trans('storefront::products.to') }}</label>
                            <input type="text" name="toPrice" class="from-control range-to" id="price-to">
                        </div>
                    </div>
                </div>

                <div class="slider noUi-target noUi-ltr noUi-horizontal" id="price-range-slider" data-to-price="{{ request('toPrice', $maxPrice) }}" data-max="{{ $maxPrice }}">
                    <div class="noUi-base">
                        <div class="noUi-connects"></div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-filter pull-right" data-loading>{{ trans('storefront::products.filter') }}</button>
        </form>
    </div>
</div>
