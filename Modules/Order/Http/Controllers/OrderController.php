<?php

namespace Modules\Order\Http\Controllers;

use Illuminate\Routing\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('order::index');
    }

    /**
     * Show the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('order::show');
    }
}
