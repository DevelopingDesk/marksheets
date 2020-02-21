<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SchoolClass;
use App\Session;
use App\Section;
use App\Subject;
use App\TestType;
use App\Students;
use App\CourseOfTeacher;
use App\TestRecord;

use auth;
class MarksController extends Controller
{
    private $extra=null;
    public function getSession(){
$all=Session::Latest('created_at')->get();
return view('ManageMarks.getsession')->withsession($all)->withextra($this->extra);

    }
    public function getEnroledClasses(Request $request){
$sessionid=$request->sessionid;
$user=Auth::User();
$getclasses=CourseOfTeacher::distinct()->select('class_id')->where('teacher_id','=',$user->id)
->where('session_id',$sessionid)->get();
return view('ManageMarks.enrolledclasses')->withclasses($getclasses)->withsessionid($sessionid)->withextra($this->extra);



    }
    //subjects plus sections
    public function allSubjects($id,$sessionid){


$user=Auth::User();

$getsubjects = CourseOfTeacher::distinct()->where('session_id','=',$sessionid)->where('class_id','=',$id)->where('teacher_id','=',$user->id)->get(['section_id','subject_id','class_id']);

return view('ManageMarks.enrolledsubjects')->withallsubjects($getsubjects)->withsessionid($sessionid);

}
public function allStudents($sectionid,$sessionid,$classid,$subjectid){
$user=Auth::User();
$exams=TestType::all();
$allclass=SchoolClass::all();
//$session=Session::Latest('created_at')->get();
$allstudents=Students::distinct()
->where('class_id','=',$classid)
->where('session_id','=',$sessionid)
->where('section_id','=',$sectionid)
->get();
//dd($allstudents);
return view('ManageMarks.allstudents')->withallstudents($allstudents)->withextra($this->extra)->withexams($exams)->withsubjectid($subjectid);
;
    }

public function storeMarks(Request $request){
$studentid=$_POST['studentid'];
$check=TestRecord::where('student_id','=',$studentid)->where('date','=',$_POST['date'])->where('subject_id','=',$_POST['subjectid'])->first();
	if(($_POST['date']==null)||($_POST['totalmarks']==null)||($_POST['obtainedmarks']==null))

	{
return response('Fill all fields');

	}
	
	else if($check==null)
{
	$testrecord=new TestRecord();
	$user=Auth::User();
$obj=Students::where('id',$studentid)->first();
$testrecord->obtained=$_POST['obtainedmarks'];
$testrecord->total=$_POST['totalmarks'];
$testrecord->date=$_POST['date'];
$testrecord->subject_id=$_POST['subjectid'];
$testrecord->class_id=$obj->class_id;
$testrecord->student_id=$_POST['studentid'];
$testrecord->teacher_id=$user->id;
$testrecord->section_id=$obj->section_id;
$testrecord->session_id=$obj->session_id;
$testrecord->save();

return response('successfully uploaded');
}
else{

$check->obtained=$_POST['obtainedmarks'];
$check->update();
return response('Marks Updated ');


}


}

}

