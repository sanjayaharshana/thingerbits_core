@extends('public.layout')

@section('title', trans('storefront::cart.cart'))

@push('meta')
    <meta name="cart-has-shipping-method" content="{{ $cart->hasShippingMethod() }}">
@endpush

@section('content')
    <div class="row">
        <div class="cart-list-wrapper clearfix">
            @if ($cart->isEmpty())
                <h2 class="text-center">{{ trans('storefront::cart.your_cart_is_empty') }}</h2>
            @else
                <div class="col-md-8">
                    <div class="box-wrapper clearfix">
                        <div class="box-header">
                            <h4>{{ trans('storefront::cart.cart') }}</h4>
                        </div>

                        <div class="cart-list">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="hidden-xs">
                                        <tr>
                                            <th></th>
                                            <th>{{ trans('storefront::cart.product') }}</th>
                                            <th>{{ trans('storefront::cart.price') }}</th>
                                            <th>{{ trans('storefront::cart.quantity') }}</th>
                                            <th>{{ trans('storefront::cart.total') }}</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($cart->items() as $cartItem)
                                            <tr class="cart-item">
                                                <td>
                                                    @if (! $cartItem->product->base_image->exists)
                                                        <div class="image-placeholder">
                                                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                        </div>
                                                    @else
                                                        <div class="image-holder">
                                                            <img src="{{ $cartItem->product->base_image->path }}">
                                                        </div>
                                                    @endif
                                                </td>

                                                <td>
                                                    <h5>
                                                        <a href="{{ route('products.show', $cartItem->product->slug) }}">{{ $cartItem->product->name }}</a>
                                                    </h5>

                                                    <div class="option">
                                                        @foreach ($cartItem->options as $option)
                                                            <span>{{ $option->name }}: <span>{{ $option->values->implode('label', ', ') }}</span></span>
                                                        @endforeach
                                                    </div>
                                                </td>

                                                <td>
                                                    <label class="visible-xs">{{ trans('storefront::cart.price') }}:</label>
                                                    <span>{{ $cartItem->unitPrice()->convertToCurrentCurrency()->format() }}</span>
                                                </td>

                                                <td class="clearfix">
                                                    <div class="quantity pull-left clearfix">
                                                        <div class="input-group-quantity pull-left clearfix">
                                                            <input type="text" name="qty" value="{{ $cartItem->qty }}" class="input-number input-quantity pull-left {{ "qty-{$loop->index}"  }}" min="1" max="{{ $cartItem->product->manage_stock ? $cartItem->product->qty : '' }}">

                                                            <span class="pull-left btn-wrapper">
                                                                <button type="button" class="btn btn-number btn-plus" data-type="plus"> + </button>
                                                                <button type="button" class="btn btn-number btn-minus" data-type="minus" {{ $cartItem->qty === 1 ? 'disabled' : '' }}> &#8211; </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <label class="visible-xs">{{ trans('storefront::cart.total') }}:</label>
                                                    <span>{{ $cartItem->total()->convertToCurrentCurrency()->format() }}</span>
                                                </td>

                                                <td>
                                                    <button data-toggle="tooltip" data-placement="top" title="{{ trans('storefront::cart.update') }}" class="btn-update" data-id={{ encrypt($cartItem->id) }} data-quantity-field="{{ ".qty-{$loop->index}" }}">
                                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                                    </button>

                                                    <form method="POST" action="{{ route('cart.items.destroy', encrypt($cartItem->id)) }}" onsubmit="return confirm('{{ trans('cart::messages.confirm') }}');">
                                                        {{ csrf_field() }}
                                                        {{ method_field('delete') }}

                                                        <button type="submit" class="cross-button" data-toggle="tooltip" data-placement="top" title="{{ trans('storefront::cart.remove') }}">
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="cart-list-bottom">
                            <form method="POST" action="{{ route('cart.coupon.store') }}" id="coupon-apply-form" class="clearfix">
                                {{ csrf_field() }}

                                <div class="form-group pull-left">
                                    <input type="text" name="coupon" class="form-control" id="coupon" value="{{ old('coupon') }}">

                                    <button type="submit" class="btn btn-primary" id="coupon-apply-submit" data-loading>
                                        {{ trans('storefront::cart.apply_coupon') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="order-review cart-list-sidebar">
                        <div class="cart-total">
                            <h3>{{ trans('storefront::cart.cart_totals') }}</h3>

                            <span class="item-amount">
                                {{ trans('storefront::cart.subtotal') }}
                                <span>{{ $cart->subTotal()->convertToCurrentCurrency()->format() }}</span>
                            </span>

                            @if ($cart->hasAvailableShippingMethod())
                                <div class="available-shipping-methods">
                                    <span>{{ trans('storefront::cart.shipping_method') }}</span>

                                    <div class="form-group">
                                        @foreach ($cart->availableShippingMethods() as $name => $shippingMethod)
                                            <div class="radio">
                                                <input type="radio" name="shipping_method" class="shipping-method" value="{{ $name }}" id="{{ $name }}" {{ $cart->shippingMethod()->name() === $shippingMethod->name || $loop->first ? 'checked' : '' }}>
                                                <label for="{{ $name }}">{{ $shippingMethod->label }}</label>
                                                <span class="pull-right">{{ $shippingMethod->cost->convertToCurrentCurrency()->format() }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                @if ($errors->has('shipping_method'))
                                    <span class="error-message text-center">
                                        {!! $errors->first('shipping_method', '<span class="help-block">:message</span>') !!}
                                    </span>
                                @endif
                            @endif

                            @if ($cart->hasCoupon())
                                <span class="item-amount">
                                    {{ trans('storefront::cart.coupon') }} (<span class="coupon-code">{{ $cart->coupon()->code() }}</span>)
                                    <span id="coupon-value">&#8211;{{ $cart->coupon()->value()->convertToCurrentCurrency()->format() }}</span>
                                </span>
                            @endif

                            @foreach ($cart->taxes() as $tax)
                                <span class="item-amount">
                                    {{ $tax->name() }}
                                    <span>{{ $tax->amount()->convertToCurrentCurrency()->format() }}</span>
                                </span>
                            @endforeach

                            <span class="total">
                                {{ trans('storefront::cart.total') }}
                                <span id="total-amount">{{ $cart->total()->convertToCurrentCurrency()->format() }}</span>
                            </span>

                            @if ($cart->hasNoAvailableShippingMethod())
                                <span class="error-message text-center">{{ trans('storefront::cart.no_shipping_method_is_available') }}</span>
                            @endif

                            <a href="{{ route('checkout.create') }}" class="btn btn-primary btn-checkout {{ $cart->hasNoAvailableShippingMethod() ? 'disabled' : '' }}" data-loading>
                                {{ trans('storefront::cart.checkout') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    @include('public.products.partials.landscape_products', [
        'title' => trans('storefront::product.you_might_also_like'),
        'products' => $cart->crossSellProducts()
    ])
@endsection
