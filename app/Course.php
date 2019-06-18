<?php
namespace FleetCart;

use FleetCart\User;
use FleetCart\MyCourse;
use Illuminate\Database\Eloquent\Model;

class Course extends Model {
    protected $table = "course_list";

    public function addToMyCourse(){
      $logged_user = auth()->user();
      
    }

    public function isPurchased(){
       $user =  User::with('my_courses')
       ->where('id',request()->user()->id)
       ->first();

       $course_ids = $user->my_courses->pluck('course_id')->toArray();
       if(in_array($this->course_id,$course_ids)){
           return true;
       }
       return false;
    }
}