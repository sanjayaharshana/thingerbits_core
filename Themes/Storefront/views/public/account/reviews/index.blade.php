@extends('public.account.layout')

@section('title', trans('storefront::account.links.my_reviews'))

@section('account_breadcrumb')
    <li class="active">{{ trans('storefront::account.links.my_reviews') }}</li>
@endsection

@section('content_right')
    <div class="index-table">
        @if ($reviews->isEmpty())
            <h3 class="text-center">{{ trans('storefront::account.reviews.no_reviews') }}</h3>
        @else
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>{{ trans('storefront::account.reviews.product') }}</th>
                            <th>{{ trans('storefront::account.reviews.rating') }}</th>
                            <th>{{ trans('storefront::account.reviews.date') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($reviews as $review)
                            <tr>
                                <td>
                                    @if (! $review->product->base_image->exists)
                                        <div class="image-placeholder">
                                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                                        </div>
                                    @else
                                        <div class="image-holder">
                                            <img src="{{ $review->product->base_image->path }}">
                                        </div>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('products.show', ['slug' => $review->product->slug]) }}">{{ $review->product->name }}</a>
                                </td>

                                <td>
                                    @include('public.products.partials.product.rating', ['rating' => $review->rating])
                                </td>

                                <td>{{ $review->created_at->toFormattedDateString() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    @if ($reviews->isNotEmpty())
        <div class="pull-right">
            {!! $reviews->links() !!}
        </div>
    @endif
@endsection
