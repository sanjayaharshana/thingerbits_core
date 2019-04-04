@extends('public.layout')

@section('title', trans('storefront::compare.compare'))

@section('content')
    <section class="compare">
        @if ($compare->hasAnyProduct())
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>{{ trans('storefront::compare.product_overview') }}</td>

                            @foreach ($compare->products() as $product)
                                <td class="product-overview">
                                    @if (! $product->base_image->exists)
                                        <div class="image-placeholder">
                                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                                        </div>
                                    @else
                                        <div class="image-holder">
                                            <img src="{{ $product->base_image->path }}">
                                        </div>
                                    @endif

                                    <h5>
                                        <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                                    </h5>

                                    <form method="POST" action="{{ route('compare.destroy', $product) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}

                                        <button type="submit" class="cross-button">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </td>
                            @endforeach
                        </tr>

                        <tr>
                            <td>{{ trans('storefront::compare.price') }}</td>

                            @foreach ($compare->products() as $product)
                                <td>
                                    <span class="product-price">{{ product_price($product) }}</span>
                                </td>
                            @endforeach
                        </tr>

                        @foreach ($compare->attributes() as $attribute)
                            <tr>
                                <td>{{ $attribute->name }}</td>

                                @foreach ($compare->products() as $product)
                                    @if ($product->hasAttribute($attribute))
                                        <td>{{ $product->attributeValues($attribute) }}</td>
                                    @else
                                        <td>&ndash;</td>
                                    @endif
                                @endforeach
                            </tr>
                        @endforeach

                        <tr>
                            <td>{{ trans('storefront::compare.add_to_cart') }}</td>

                            @foreach ($compare->products() as $product)
                                <td>
                                    @if ($product->options_count > 0)
                                        <a href="{{ route('products.show', $product->slug) }}" class="btn btn-primary">
                                            {{ trans('storefront::compare.view_details') }}
                                        </a>
                                    @else
                                        <form method="POST" action="{{ route('cart.items.store') }}">
                                            {{ csrf_field() }}

                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="qty" value="1">

                                            <button type="submit" class="btn btn-primary" {{ $product->isOutOfStock() ? 'disabled' : '' }} data-loading>
                                                {{ trans('storefront::compare.add_to_cart') }}
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        @else
            <h2 class="text-center">{{ trans('storefront::compare.no_product') }}</h2>

            <a href="{{ url()->previous() }}" class="go-back-link">
                <i class="fa fa-reply" aria-hidden="true"></i>
                {{ trans('storefront::compare.go_back') }}
            </a>
        @endif
    </section>
@endsection
