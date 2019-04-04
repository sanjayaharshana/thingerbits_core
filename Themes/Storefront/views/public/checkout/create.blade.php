@extends('public.layout')

@section('title', trans('storefront::checkout.checkout'))

@push('meta')
    <meta name="cart-has-shipping-method" content="{{ $cart->hasShippingMethod() }}">
@endpush

@push('globals')
    <script>
        FleetCart.langs['storefront::checkout.please_select'] = '{{ trans("storefront::checkout.please_select") }}';
    </script>
@endpush

@section('content')
    <section class="checkout">
        <form method="POST" action="{{ route('checkout.store') }}" id="checkout-form">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-8">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3"></div>
                            </div>

                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="address-tab active">
                                    <a href="#address" data-toggle="tab" aria-controls="step1" role="tab" data-step="1">
                                        {{ trans('storefront::checkout.address') }}

                                        <span class="round-tab"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                    </a>
                                </li>

                                <li role="presentation" class="disabled payment-tab">
                                    <a href="#payment" data-toggle="tab" aria-controls="step2" role="tab" data-step="2">
                                        {{ trans('storefront::checkout.payment') }}

                                        <span class="round-tab"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                                    </a>
                                </li>

                                <li role="presentation" class="disabled confirm-tab">
                                    <a href="#confirm" data-toggle="tab" aria-controls="step3" role="tab" data-step="3">
                                        {{ trans('storefront::checkout.confirm') }}

                                        <span class="round-tab"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            @include('public.checkout.partials.address')
                            @include('public.checkout.partials.payment')
                            @include('public.checkout.partials.confirm')
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="checkout-sidebar order-review">
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

                            <div id="taxes">
                                @foreach ($cart->taxes() as $tax)
                                    <span class="item-amount">
                                        {{ $tax->name() }}
                                        <span>{{ $tax->amount()->convertToCurrentCurrency()->format() }}</span>
                                    </span>
                                @endforeach
                            </div>

                            <span class="total">
                                {{ trans('storefront::cart.total') }}
                                <span id="total-amount">{{ $cart->total()->convertToCurrentCurrency()->format() }}</span>
                            </span>

                            <div id="stripe-payment">
                                <div id="card-element">
                                    {{-- A Stripe Element will be inserted here. --}}
                                </div>
                            </div>

                            @if ($cart->hasNoAvailableShippingMethod())
                                <span class="error-message text-center">{{ trans('storefront::cart.no_shipping_method_is_available') }}</span>
                            @endif

                            <div class="checkout-terms checkbox text-center">
                                <input type="checkbox" name="terms_and_conditions" id="terms-and-conditions">

                                <label for="terms-and-conditions">
                                    {{ trans('storefront::checkout.i_agree_to_the') }} <a href="{{ $termsPageURL }}">{{ trans('storefront::checkout.terms_and_conditions') }}</a>
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-checkout {{ $cart->hasNoAvailableShippingMethod() ? 'disabled' : '' }}" data-loading disabled>
                                {{ trans('storefront::checkout.place_order') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection

@push('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ v(Theme::url('public/js/stripe.js')) }}"></script>
@endpush
