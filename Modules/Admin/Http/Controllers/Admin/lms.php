<?php

namespace Modules\Admin\Http\Controllers\Admin;

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

class lms extends Controller
{
    public function lessionpan()
    {   
        $data['data'] = DB::table('course_list')->get(); 
        return view('admin::rashpanel.index',$data); 
    }

    public function addles() 
    {
       
    }

    public function insertlesson(request $request) 
    {
        echo "ehhple";
    }

    public function courseopener($courseid) 
    {
        $data['data'] = DB::table('lessons')->where('course_id', $courseid)->orderBy('l_order', 'ASC')->get();

        if(count($data) > 0)
        {
            return view('admin::rashpanel.listgroup',$data);
        }
        else
        {
            return view('admin::rashpanel.listgroup',$data);
        }

       // return view('admin::rashpanel.listgroup');
    }

    public function lessoneditor( $lessonid) {
       // return view('admin::rashpanel.lesson_editor');
        $data['data'] = DB::table('lessons')->where('lesson_id', $lessonid)->orderBy('l_order', 'ASC')->get();
        $this->x = $lessonid;

        if(count($data) > 0)
        {
            return view('admin::rashpanel.lesson_editor',$data);
        }
        else
        {
            return view('admin::rashpanel.listgroup',$data);
        }

       // return view('admin::rashpanel.listgroup');

    }

    public function update_course (Request $req)
    {
        $lesson_id = $req->input('lesson_id');
        $course_id = $req->input('course_id');
        $lesson_title = $req->input('lesson_title');
        $lesson_body = $req->input('lesson_body');  
    }

    public function updatelesson (Request $req) 
    {
        
        $lesson_id = $req->input('lesson_id');
        $course_id = $req->input('course_id');
        $lesson_title = $req->input('lesson_title');
        $lesson_body = $req->input('lesson_body');

        $user_id = $req->input('user_id');
        $l_order = $req->input('l_order');
        $is_ok = $req->input('is_ok');

        $lesson_type = $req->input('lestype');
        $video_url = $req->input('video_url');
        $video_description = $req->input('video_description');

        if($req->hasFile('video_url')) {
            $filenameWithExt = $req->file('video_url')->getClientOriginalName();          
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);                       
            $extension = $req->file('video_url')->getClientOriginalExtension();            
            $fileNameToStore = $filename.'_'.time().'.'.$extension;                    
            $path = $req->file('video_url')->    storeAs('video_url', $fileNameToStore);
        } else {
            $fileNameToStore = $req->input('filepath');
        }      
        
       // $data = array('lesson_title'->$lesson_title,'lesson_body'->$lesson_body);
       DB::table('lessons')->where('lesson_id', $lesson_id )->update([
           'lesson_title' => $lesson_title,
           'lesson_body' => $lesson_body,
           'user_id'=>$user_id,
           'l_order'=>$l_order,
           'is_ok' => $is_ok,
           'lesson_type' => $lesson_type,
           'video_url' => $fileNameToStore,
           'video_description' => $video_description           
           ]);

        //echo $lesson_id;
        return redirect()->route('courseopenerrc',$course_id);        

        //echo $request->lesson_title;

    }

    public function deletelesson($valueid)
    {
        DB::table('lessons')->where('lesson_id', $valueid )->delete();

        return back(); 

    } 

    public function addlesson ($cour_id) 
    {
    
        return view('admin::rashpanel.insertlesson',['course_id' => $cour_id]);
    }

    public function insertles(Request $reql) 
    {
        // dd($reql->all());
        $course_id =  $reql->input('apple');
        $lesson_title = $reql->input('lesson_title');
        $lesson_body = $reql->input('lesson_body');
        $user_id = $reql->input('user_id');
        $l_order = $reql->input('l_order');
        $is_ok = $reql->input('is_ok');

        $lesson_type = $reql->input('lestype');
        $video_url = $reql->input('filepath');
        $video_description = $reql->input('video_description');

        if($reql->hasFile('video_url')) {
            $filenameWithExt = $reql->file('video_url')->getClientOriginalName();          
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);                       
            $extension = $reql->file('video_url')->getClientOriginalExtension();            
            $fileNameToStore = $filename.'_'.time().'.'.$extension;                    
            $path = $reql->file('video_url')->    storeAs('video_url', $fileNameToStore);
        } else {
            $fileNameToStore = $reql->input('filepath');
        }      


        $data = array(
            'course_id' => $course_id,
            'lesson_title'=>$lesson_title,
            'lesson_body'=>$lesson_body,
            'user_id'=>$user_id,
            'l_order'=>$l_order,
            'is_ok' => $is_ok,
            'lesson_type' => $lesson_type,
            'video_url' => $fileNameToStore,
            'video_description' => $video_description
        );

        DB::table('lessons')->insert($data);
       // return view('admin::rashpanel.insertlesson');
       //return view('admin::rashpanel.listgroup',['course_id' => $course_id]);
       return redirect()->route('courseopenerrc',$course_id);  
        //echo "dfsd";
   
    }

    function createcourse() {
        return view('admin::rashpanel.createcourse');

        //echo 'appe';
    }

    function courseinsert(Request $reql) 
    {
        $user_id =  '1';
        $course_title = $reql->input('course_title');
        $slag = $reql->input('slg');
        $course_image = $reql->file('course_img');
        $course_intro = $reql->input('course_intros');
        $course_discription = $reql->input('cours_discrip');
        $reccomandproduct_id = $reql->input('Recommand_Products');     
        
        if($reql->hasFile('course_img')) {
            $filenameWithExt = $reql->file('course_img')->getClientOriginalName();          
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);                       
            $extension = $reql->file('course_img')->getClientOriginalExtension();            
            $fileNameToStore = $filename.'_'.time().'.'.$extension;                    
            $path = $reql->file('course_img')->    storeAs('course_img', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }      

        $id = DB::table('course_list')->insertGetId(
            array(
                'user_id' => $user_id,
                'course_title'=>$course_title,
                'slag'=>$slag,
                'course_image'=>$fileNameToStore,
                'course_intro'=>$course_intro,
                'course_discription' => $course_discription,
                'reccomandproduct_id' => $reccomandproduct_id,
            )
        );

        $lesdata = array(
            'user_id' => '1',
            'lesson_title'=>'Example Lesson',
            'lesson_body'=>'Hellow WOrd',
            'l_order'=>'1',
            'course_id'=> $id,
            'is_ok' => '1',
        );

       DB::table('lessons')->insert($lesdata);       
       
       return redirect()->route('courseopenerrc',$id);

    //return view('admin::rashpanel.createcourse');
    }

    function deletecourse ($course_id) 
    {
        DB::table('lessons')->where('course_id', $course_id )->delete();
        DB::table('course_list')->where('course_id', $course_id )->delete();

        return back(); 
    }



    function courseuser_image($course_id)
    {
        $data = DB::table('course_list')->where('course_id', $course_id)->first();
        $path = storage_path('app/public/course_img/') . $data->course_image;    
        if(!File::exists($path)) 
            $path = storage_path('app/public/course_img/') . 'default.png';
            $file = File::get($path);
            $type = File::mimeType($path);
            $response = Response::make($file, 200);
            $response->header("Content-Type", $type);
        return $response;
    }

   

    

}