<?php

namespace Modules\Review\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;
use Modules\Review\Http\Requests\StoreReviewRequest;

class ProductReviewController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param int $productId
     * @param \Modules\Review\Http\Requests\StoreReviewRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store($productId, StoreReviewRequest $request)
    {
        if (! setting('reviews_enabled')) {
            return back();
        }

        Product::findOrFail($productId)
            ->reviews()
            ->create([
                'reviewer_id' => auth()->id(),
                'rating' => $request->rating,
                'reviewer_name' => $request->reviewer_name,
                'comment' => $request->comment,
                'is_approved' => setting('auto_approve_reviews', 0),
            ]);

        return back()->withSuccess($this->message());
    }

    /**
     * Returns the success message.
     *
     * @return string
     */
    private function message()
    {
        if (setting('auto_approve_reviews')) {
            return trans('review::messages.thank_you');
        }

        return trans('review::messages.submitted_for_approval');
    }
}
