<?php

namespace Modules\Account\Http\Controllers;

use Modules\User\Entities\User;
use Modules\Order\Entities\Order;
use Illuminate\Routing\Controller;
use Modules\Review\Entities\Review;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\SearchTerm;
use Illuminate\Http\Request; 
use File;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Storage;
use DB;
use Log;
use Response;


class Lmscontroller extends Controller
{

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

    public function getcourses()
    {
        $data['data']= DB::table('course_list')->get();

        return view('public.account.lms.dashboard',$data);
    }

    function my_courses()
    {
      //  Auth::user()->id;
     // $data['data']= DB::table('course_list')->get();
      $data['data'] = array();
      $my_course = DB::table('my_courses')->where('user_id', auth()->user()->id)->get();      
      foreach ($my_course as  $value) {
          array_push($data,DB::table('course_list')->where('course_id',$value->course_id )->first());        
       }

    //dd($data);

    //   $data['data'] = DB::table('course_list')->where('course_id',$my_course->course_id ); 
    //     echo $my_course;
      //dd($data);
     return view('public.account.lms.mycourse',$data);

     //  echo auth()->user()->id;
    }
}