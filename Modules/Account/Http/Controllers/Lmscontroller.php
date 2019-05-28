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

    function my_courses_getdata()
    {
      //  Auth::user()->id;
     // $data['data']= DB::table('course_list')->get();
      $data = array();
      $my_course = DB::table('my_courses')->where('user_id', auth()->user()->id)->get();      
      foreach ($my_course as  $value) {
          array_push($data,DB::table('course_list')->where('course_id',$value->course_id )->first());        
       }

    //dd($data);

    //   $data['data'] = DB::table('course_list')->where('course_id',$my_course->course_id ); 
    //     echo $my_course;
      //dd($data);
    
     return Response::json($data);
     //return view('public.account.lms.mycourse',$data);
     //dd($data);
     //  echo auth()->user()->id;
    }

    public function my_courses(){
        
        return view('public.account.lms.mycourse');
    }

    public function course_open($id)
    {
        
        $les_data['les_data'] = DB::table('lessons')->where('course_id', $id)->get();

        $course_data['course_data'] = DB::table('course_list')->where('course_id', $id)->first();       

        return view('public.account.lms.open_course',$les_data,$course_data);
    }

    public function lesson_iol($course_id,$les_id) 
    {
        $les_data['les_data'] = DB::table('lessons')->where('course_id', $course_id)->get();
        $course_data['course_data'] = DB::table('course_list')->where('course_id', $course_id)->first();    
        $les_magnet['lesrab'] = DB::table('lessons')->where('lesson_id', $les_id)->first();
       
        //echo $les_magnet;
        return view('public.account.lms.open_course',$les_data,$course_data,$les_magnet);

    }

    public function add_my_course(Request $roll)
    {
        $id = DB::table('my_courses')->insertGetId(
            array(
                "course_id"=>$roll->course_id,
                "user_id"=> auth()->user()->id,
                "payed"=> $roll->payed,
                "date"=> '1' 
            )
        );

        //return view('admin::purches_order.purches_order');
        return redirect()->route('getcourses',['mycourse_id' => $id]); 

    }
}