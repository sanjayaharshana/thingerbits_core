<?php
namespace FleetCart;

use FleetCart\MyCourse;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = "users";


    public function my_courses(){
        return $this->hasMany(MyCourse::class, 'user_id', 'id');
    }
}

