<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\SchoolClass;
use App\Section;
use App\Session;


class StudentController extends Controller
{
    
   public function create(){

$class=SchoolClass::All();
$section=Section::All();
$session=Session::All();
   	return view('Student.create')->withschoolclass($class)->withsection($section)->withsession($session);
   }

public function store(Request $request){
$obj=new Students();
$obj->name=$request->name;
$obj->fatherName=$request->fathername;
$obj->rollnumber=$request->rollnumber;
$obj->dob=$request->dob;
$obj->cnic=$request->cnic;
$obj->phone=$request->phone;
$obj->enrollment_date=$request->enrollment_date;
$obj->class_id=$request->class_id;
$obj->section_id=$request->section_id;
$obj->session_id=$request->session_id;
$obj->save();

return back();





}

public function view(){
$obj=Students::All();

return view('Student.view')->withstudents($obj);

}

public function delete($id){
$rec=Students::where('id',$id)->first();
$rec->delete();
return back();

}

}
