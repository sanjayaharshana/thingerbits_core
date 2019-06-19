<?php

namespace Modules\Page\Http\Controllers;
Use Redirect;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

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
        $course_data['coursedata']= DB::table('course_list')->get();     
       
        return view('public.home_land.index',$course_data);

    }

    public function shopfunction() 
    {
       return view('public.home.index');
    }
}
