@extends('public.account.layout')

@section('title', trans('storefront::account.links.dashboard'))

@section('content_right')
<style>
.megamenu-wrapper{
    display: none;
}
</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">


<link href="">

    <div class="my-dashboard">                  




        <div class="recent-orders index-table">
            <h4 class="section-header">
                {{ trans('storefront::account.dashboard.recent_orders') }}
            </h4>
                @if ($recentOrders->isNotEmpty())
                    <a href="{{ route('account.orders.index') }}" class="btn btn-info btn-round pull-right" style="color:white">
                        {{ trans('storefront::account.dashboard.view_all') }}
                    </a>
                @endif
           

            @if ($recentOrders->isEmpty())
                <span>{{ trans('storefront::account.orders.no_orders') }}</span>
            @else
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{ trans('storefront::account.orders.order_id') }}</th>
                                <th>{{ trans('storefront::account.orders.date') }}</th>
                                <th>{{ trans('storefront::account.orders.status') }}</th>
                                <th>{{ trans('storefront::account.orders.total') }}</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($recentOrders as $order)
                                <tr>
                                    <td>#{{ $order->id }}</td>
                                    <td>{{ $order->created_at->toFormattedDateString() }}</td>
                                    <td>{{ $order->status() }}</td>
                                    <td>{{ $order->total->convert($order->currency, $order->currency_rate)->format($order->currency) }}</td>
                                    <td>
                                        <a href="{{ route('account.orders.show', $order) }}" class="btn-view" data-toggle="tooltip" title="{{ trans('storefront::account.orders.view_order') }}" rel="tooltip">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        <div class="clearfix"></div>

        <div class="account-information clearfix">
            <h4>{{ trans('storefront::account.dashboard.account_information') }}</h4>

            <div class="col-md-6">
                <div class="row">
                    <div class="contact-information">
                        <span>{{ $my->full_name }}</span>
                        <span>{{ $my->email }}</span>

                        <a href="{{ route('account.profile.edit') }}">
                            {{ trans('storefront::account.dashboard.edit') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
            <div class="col-md-3">
                @include('public.home.sections.partials.vertical_products', ['title' => 'Apple', 'products' => $threeColumnCarouselProducts['column_2']])
            </div>
            
  
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
</script>