<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    

     public function schoolClass(){

        return $this->belongsTo('App\SchoolClass', 'class_id');


    }
     public  function userDetail() {
        return $this->belongsTo('App\User', 'student_id');
    }

     public function session(){

        return $this->belongsTo('App\Session','session_id');


    }
    public function section(){

        return $this->belongsTo('App\Section','section_id');


    }
}
