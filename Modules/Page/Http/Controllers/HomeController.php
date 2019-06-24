<?php

namespace Modules\Page\Http\Controllers;
Use Redirect;
use File;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request; 
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Storage;
use Log;
use Response;
use URL;

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

    public function course_list($course_id){
        $course_data = DB::table('course_list')->where('course_id',$course_id)->get();
        $les_group  = DB::table('les_group')->where('course_id', $course_id)->orderBy('lg_order', 'ASC')->get();
       

        return view('public.home_land.course_page',
         ['coursedata' =>  $course_data,
        'les_group' =>  $les_group,
        'id' => $course_id, 
        ]);
    }

    public function shopfunction() 
    {       
       return view('public.home.index');
    }

    public function getcourse_img($course_id)
    {
        $data = DB::table('course_list')->where('course_id', $course_id)->first();
        $path = storage_path('app/public/course_img/') . $data->course_image;    
        if(!File::exists($path)) 
            $path = storage_path('app/public/course_img/') . 'default.jpg';
            $file = File::get($path);
            $type = File::mimeType($path);
            $response = Response::make($file, 200);
            $response->header("Content-Type", $type);
        return $response;
    }

    function jsonles($lg_id)
    {
        $data = DB::table('lessons')->where('group_id', $lg_id)->get();
        return Response::json($data);
    }

    public function getcourses($core_id){
        $course_data['coursedata']= DB::table('course_list')->get(); 

        //$lesson_count = DB::table('lessons')->where('course_id', $lg_id)->count();

        return view('public.home_land.course_list',$course_data);
    }

  
}
