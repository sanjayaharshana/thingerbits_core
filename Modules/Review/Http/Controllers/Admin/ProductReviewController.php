<?php

namespace Modules\Review\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Review\Entities\Review;

class ProductReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('table')) {
            return Review::query()->table($request);
        }

        return view('review::admin.reviews.index');
    }
}
