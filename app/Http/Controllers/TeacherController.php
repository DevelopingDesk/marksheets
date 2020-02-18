<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\Session;
use App\SchoolClass;
use App\Role;
use App\User;
class TeacherController extends Controller
{
      private $extra=null;
    public function create(){
$role=Role::all();
$section=Section::all();
$schoolclass=Schoolclass::all();

    	return view('Teacher.create')->withextra($this->extra)->withschoolclass($schoolclass)->withsection($section)->withrole($role);
    }


        public function store(Request $data){
$user=new User();
         
            $user->name = $data['name'];
          
           
             $user->email=$data['email'];
            
            $user->password =bcrypt($data['password']);
      

            $user->save();

             
            $role = Role::where('id',$data['acounttype'])->first();
            $user->attachRole($role->id);
        
      
          
      
        return back();


    }
 public function viewAll(){

$role=Role::all();
$section=Section::all();
$schoolclass=Schoolclass::all();

$student=User::where('id','!=',1)->get();

//dd($student->section->name);

    	return view('Teacher.viewteacher')->withextra($this->extra)->withschoolclass($schoolclass)->withsection($section)->withrole($role)->withstudent($student);

    }

    public function delete($id){
$rec=user::where('id',$id)->first();
$rec->delete();
return back();

}



}
