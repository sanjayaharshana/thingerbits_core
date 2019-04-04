<?php

namespace Modules\Account\Http\Controllers;

use Illuminate\Routing\Controller;

class AccountWishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = auth()->user()
            ->wishlist()
            ->with('files')
            ->paginate(15);

        return view('public.account.wishlist.index', compact('products'));
    }

    public function destroy($productId)
    {
        auth()->user()->wishlist()->detach($productId);

        return back()->withSuccess(trans('account::messages.product_removed_from_wishlist'));
    }
}
