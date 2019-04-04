<?php

namespace Modules\Wishlist\Http\Controllers;

use Illuminate\Routing\Controller;

class WishlistController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if ($this->alreadyInWishlist()) {
            return back();
        }

        auth()->user()->wishlist()->attach(request('product_id'));

        return back()->withSuccess(trans('wishlist::messages.added'));
    }

    private function alreadyInWishlist()
    {
        $wishlist = auth()->user()->wishlist()->pluck('product_id');

        return $wishlist->contains(request('product_id'));
    }
}
