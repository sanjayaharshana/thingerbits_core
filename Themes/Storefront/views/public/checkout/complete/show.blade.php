@extends('public.layout')

@section('content')
    <section class="order-confirmation text-center">
        <i class="fa fa-check-circle-o" aria-hidden="true"></i>

        <h2>{{ trans('storefront::order_placed.your_order_has_been_placed') }}</h2>

        <p>
            {{ trans('storefront::order_placed.order_id') }}<span> #{{ $order->id }}</span>
            <br>
            {{ trans('storefront::order_placed.thanks') }}
        </p>
    </section>
@endsection
