<?php

namespace Modules\Account\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class AccountDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my = auth()->user();
        $recentOrders = auth()->user()->recentOrders(5);

        return view('public.account.dashboard.index', compact('my', 'recentOrders'));
    }

    //Thingerbits Editing Core
    
    public function coursefunction() 
    {   
        $data['data'] = DB::table('course_list')->get();

        if(count($data) > 0)
        {
            return view('public.account.coursepanel.index',$data);
        }
        else
        {
            return view('public.account.coursepanel.index');
        }
    }

    public function skillpane()
    {   
        return view('public.account.skillolder.skillpane');

    }

    public function moreinfopopup($id)
    {
        //course listner basic
        $course_lister = DB::table('course_list')->where('course_id', $id)->first();
         
        //auther by course 
        $auther_lister = DB::table('course_list')->where('course_id', $course_lister->course_title)->first();

        $course_lister->course_title; 


        return view('public.account.courseinfopop.index',[
            'name' =>  $course_lister->course_title, 
            'body' =>  $course_lister->course_intro, 
            'course_id' => $course_lister->course_id,
         ]);

       // return view('public.account.courseinfopop.index', ['course_lister' => $course_lister]);

        //return view('');
              

    }

    public function recmanproduct($recproduct) 
    {
        $course_lister = DB::table('course_list')->where('course_id', $id)->first();
        $course_lister->course_title; 
        return view('public.account.courseinfopop.index', ['name' =>  $course_lister->course_title, 'body' =>  $course_lister->course_intro,'coid' =>  $id, ]);


    }

    public function coursecenter($sharp,$apple) {

   

        //want to add anable where bool
        $data['data'] = DB::table('exam_list')->where('course_id', $sharp)->get();

        $oler['oler'] = DB::table('lessons')->where('course_id',$sharp)->get();

        $course_lister = DB::table('lessons')->where('lesson_id', $apple)->first();

        $map = array('var1'=>'codo', 'var2'=>'collo');


        // lesson panel engine


        if(count($data) > 0)
        {
            return view('public.account.coursecenter.index',$data,$oler,$map);
        }
        else
        {
            return view('public.account.coursecenter.index');
        }



       /* return view('public.account.coursecenter.index', 
        ['coursename' => $sharp],
        ['courseid'=>"Apple"]
        );
        */
    }
    
    public function lesson($core1,$apple)
    {
      echo $core1;
      echo $apple;

        
    }

    public function entercourse($sharp,$margin) {
        //want to add anable where bool
        $data['data'] = DB::table('exam_list')->where('course_id', $sharp)->get();
        $oler['oler'] = DB::table('lessons')->where('course_id',$sharp)->get();
        if(count($data) > 0)
        {
            return view('public.account.coursecenter.index',$data,$oler);
        }
        else
        {   
            return view('public.account.coursecenter.index');
        }
    }

    public function poengine() 
    {
        echo "dasfs";
    }

    
    
    
}
