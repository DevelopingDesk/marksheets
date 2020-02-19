<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\SchoolClass;
use App\Section;
use App\Session;
use App\TestType;


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
$obj=Students::where('leave','=',null)->get();
$schoolClass=SchoolClass::all();
$section=Section::all();
$testtype=TestType::Latest('created_at')->get();
$session=Session::Latest('created_at')->get();
return view('Student.view')->withsection($section)->withstudents($obj)->withschoolclass($schoolClass)->withsession($session)->withtest($testtype);

}

public function delete($id){
$rec=Students::where('id',$id)->first();
$rec->delete();
return back();

}
public function promote(){

	$obj=Students::where('id',$_POST['studentid'])->first();
	$classname=SchoolClass::where('id',$_POST['classid'])->first();
	$sectionname=Section::where('id',$_POST['sectionid'])->first();
	$sessionname=Session::where('id',$_POST['sessionid'])->first();
	$obj->session_id=$_POST['sessionid'];
	$obj->class_id=$_POST['classid'];
	$obj->section_id=$_POST['sectionid'];
	$obj->update();
$array=[$classname->name,$sectionname->name,$sessionname->name];
	return response()->json($array);

}
public function leave(){

	$obj=Students::where('id',$_POST['studentid'])->first();
	$obj->leave=1;
	$obj->update();
	return response('student left your school');
}

}
