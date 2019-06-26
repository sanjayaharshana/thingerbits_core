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
use Modules\Product\Entities\Product;


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
        $course_info = DB::table('course_list')->where('course_id',$course_id)->first();
        $recorn_id = $course_info->reccomandproduct_id;
        $course_product = DB::table('products')->where('id',$recorn_id)->first();
        $recommand_product_slug = $course_product->slug;      
        $product = Product::findBySlug($recommand_product_slug);
        $product_image = $product->baseimage->path;
        $cat_id_data = $course_info->cat_id;
        $cat_data = DB::table('course_cat')->where('category_id',$cat_id_data)->first();

        $user_id_data = $course_info->user_id;
        $cat_get_user_data = DB::table('users')->where('id',$user_id_data)->first();

        $course_penigration = DB::table('course_catrine')->where('course_id',$course_id)->get();

       
        //dd($cat_get_user_data);
       
       
       return view('public.home_land.course_page',
       ['coursedata' =>  $course_data,
       'les_group' =>  $les_group,
        'id' => $course_id, 
        'product_reccomand' => $product,
        'product_img' => $product_image,
        'cat_data' => $cat_data,
        'teacher_data' => $cat_get_user_data,
        'course_penigration' => $course_penigration,
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

        

      // echo $product;

        //$lesson_count = DB::table('lessons')->where('course_id', $lg_id)->count();

        return view('public.home_land.course_list',$course_data);
    }

    public function getcourse_cat($cat) {

        $data = DB::table('course_list')->where('cat_id', $cat)->get();


        return view('public.home_land.category_list',$data);

        return view('public.home_land.category_list',
        ['data' =>  $data]);
    }

  
}
