<div class="col-lg-4 col-md-5">
    <div class="rating">
        <div class="average-rating clearfix">
            <div class="average">
                <span>{{ intl_number($product->avgRating()) }}</span>
            </div>

            @include('public.products.partials.product.rating', ['rating' => $product->avgRating()])

            <span class="rate-of-average">
                {{ intl_number($product->avgRating()) }} {{ trans('storefront::product.reviews.out_of_5') }}
            </span>

            <span class="reviews-total">{{ intl_number($product->reviews->count()) }} {{ trans('storefront::product.customer_reviews') }}</span>
        </div>

        <div class="rating-bars-wrapper clearfix">
            <div class="rating-bar">
                <span class="rating-label">{{ trans('storefront::product.reviews.5_star') }}</span>

                <div class="progress">
                    <div class="progress-bar" style="width: {{ $ratedFiveTimes = $product->percentageReviewsForStar(5) }}%"></div>
                </div>

                <span class="rating-percentage">{{ intl_number($ratedFiveTimes) }}%</span>
            </div>

            <div class="rating-bar">
                <span class="rating-label">{{ trans('storefront::product.reviews.4_star') }}</span>

                <div class="progress">
                    <div class="progress-bar" style="width: {{ $ratedFourTimes = $product->percentageReviewsForStar(4) }}%"></div>
                </div>

                <span class="rating-percentage">{{ intl_number($ratedFourTimes) }}%</span>
            </div>

            <div class="rating-bar">
                <span class="rating-label">{{ trans('storefront::product.reviews.3_star') }}</span>

                <div class="progress">
                    <div class="progress-bar" style="width: {{ $ratedThreeTimes = $product->percentageReviewsForStar(3) }}%"></div>
                </div>

                <span class="rating-percentage">{{ intl_number($ratedThreeTimes) }}%</span>
            </div>

            <div class="rating-bar">
                <span class="rating-label">{{ trans('storefront::product.reviews.2_star') }}</span>

                <div class="progress">
                    <div class="progress-bar" style="width: {{ $ratedTwoTimes = $product->percentageReviewsForStar(2) }}%"></div>
                </div>

                <span class="rating-percentage">{{ intl_number($ratedTwoTimes) }}%</span>
            </div>

            <div class="rating-bar">
                <span class="rating-label">{{ trans('storefront::product.reviews.1_star') }}</span>

                <div class="progress">
                    <div class="progress-bar" style="width: {{ $ratedOneTimes = $product->percentageReviewsForStar(1) }}%"></div>
                </div>

                <span class="rating-percentage">{{ intl_number($ratedOneTimes) }}%</span>
            </div>
        </div>
    </div>
</div>
