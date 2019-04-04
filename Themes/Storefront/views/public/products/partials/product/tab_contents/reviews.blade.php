<div id="reviews" class="reviews tab-pane fade in clearfix {{ request()->has('reviews') || review_form_has_error($errors) ? 'active' : '' }}">
    <div class="row">
        @include('public.products.partials.product.reviews.ratings_overview')

        <div class="col-lg-8 col-md-7">
            <div class="user-review clearfix">
                @forelse ($reviews as $review)
                    <div class="comment">
                        <div class="comment-details">
                            <h5 class="user-name">{{ $review->reviewer_name }}</h5>

                            <span class="time" data-toggle="tooltip" title="{{ $review->created_at->toFormattedDateString() }}">
                                {{ $review->created_at->diffForHumans() }}
                            </span>

                            @include('public.products.partials.product.rating', ['rating' => $review->rating])

                            <p class="user-text">{{ $review->comment }}</p>
                        </div>
                    </div>
                @empty
                    <h3>{{ trans('storefront::product.reviews.there_are_no_reviews_for_this_product') }}</h3>
                @endforelse

                <div class="pull-right">
                    {!! $reviews->links() !!}
                </div>
            </div>

            <div class="review-form clearfix">
                <form method="POST" action="{{ route('products.reviews.store', $product) }}" class="clearfix">
                    {{ csrf_field() }}

                    <h3>{{ trans('storefront::product.reviews.add_a_review') }}</h3>

                    <span>
                        {{ trans('storefront::product.reviews.your_rating') }}
                        <span class="rating-required">*</span>
                    </span>

                    <div class="clearfix"></div>

                    <fieldset class="rating">
                        <input type="radio" id="star-5" name="rating" value="5">
                        <label class="full" for="star-5" data-toggle="tooltip" title="{{ trans('storefront::product.reviews.5_star') }}"></label>

                        <input type="radio" id="star-4" name="rating" value="4">
                        <label class="full" for="star-4" data-toggle="tooltip" title="{{ trans('storefront::product.reviews.4_star') }}"></label>

                        <input type="radio" id="star-3" name="rating" value="3">
                        <label class="full" for="star-3" data-toggle="tooltip" title="{{ trans('storefront::product.reviews.3_star') }}"></label>

                        <input type="radio" id="star-2" name="rating" value="2">
                        <label class="full" for="star-2" data-toggle="tooltip" title="{{ trans('storefront::product.reviews.2_star') }}"></label>

                        <input type="radio" id="star-1" name="rating" value="1">
                        <label class="full" for="star-1" data-toggle="tooltip" title="{{ trans('storefront::product.reviews.1_star') }}"></label>
                    </fieldset>

                    {!! $errors->first('rating', '<p class="help-block">:message</p>') !!}

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('reviewer_name') ? 'has-error' : '' }}">
                                <label for="reviewer-name">
                                    {{ trans('storefront::product.reviews.reviewer_name') }}<span>*</span>
                                </label>

                                <input type="text" name="reviewer_name" class="form-control" id="reviewer-name" value="{{ old('reviewr_name', auth()->user()->full_name ?? '') }}">

                                {!! $errors->first('reviewer_name', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
                                <label for="comment">
                                    {{ trans('storefront::product.reviews.your_review') }}<span>*</span>
                                </label>

                                <textarea name="comment" class="form-control" id="comment" cols="30" rows="10">{{ old('comment') }}</textarea>

                                @if ($errors->has('comment'))
                                    {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
                                @else
                                    <p class="help-block">
                                        <span class="note">{{ trans('storefront::product.reviews.note') }}</span>
                                        {{ trans('storefront::product.reviews.html_is_not_translated') }}
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <button type="submit" class="btn btn-primary review-submit" data-loading>
                            {{ trans('storefront::product.reviews.add_review') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
