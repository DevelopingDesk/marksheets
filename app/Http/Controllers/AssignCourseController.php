<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Session;
use App\Section;
use App\SchoolClass;
use App\CourseOfTeacher;


use App\User;//for teachers

class AssignCourseController extends Controller
{
   public function create(){
//$teachers=User::All();
   		$all=CourseOfTeacher::All();
$users = User::where('name','!=','Admin')->get();
//dd($users);
$section=Section::All();
$session=Session::All();
$subject=Subject::All();
$schoolclass=SchoolClass::All();
//dd(1);

   	return view('AssignCourse.create')->withschoolclass($schoolclass)->withsection($section)->withsession($session)->withsubject($subject)->withteachers($users)->withdata($all);
   }

   public function store(Request $request){
//dd(1);
   	$assignclass=new CourseOfTeacher();
   	$assignclass->section_id=$request->section_id;
   	$assignclass->subject_id=$request->subject_id;
   	$assignclass->session_id=$request->session_id;

   	$assignclass->teacher_id=$request->teacher_id;
   	$assignclass->class_id=$request->schoolclass_id;

   	$assignclass->save();
   	$all=CourseOfTeacher::All();
   	return back()->withdata($all);

   }
   public function delete($id){
$rec=CourseOfTeacher::where('id',$id)->first();
$rec->delete();
return back();

}
}
