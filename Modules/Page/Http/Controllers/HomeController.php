<?php

namespace Modules\Page\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //Homapage Manager
        return view('public.home_land.index');
    }

    public function shopfunction() 
    {
        return view('public.home.index');
    }
}
