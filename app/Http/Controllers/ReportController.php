<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\SchoolClass;
use App\Section;
use App\Session;
use App\Subject;
use App\TestType;
use App\TestRecord;
use DB;
class ReportController extends Controller
{


  //dd(1);
  public function getPositions(){
    $schoolclass=SchoolClass::all();
    $TestType=TestType::all();
    $session=Session::all();
    return view('Report.positions')->withsession($session)->withtestype($TestType)->withschoolclass($schoolclass);
  }

      public function positionsPdf(Request $request){

$student=Students::all();
$data=TestRecord::where('session_id','=',$request->session_id)->where('class_id','=',$request->schoolclass_id)->selectRaw('sum(obtained) as obtained,sum(total) as total,student_id')->groupBy('student_id')->get();
//dd($data->schoolClass->name);
/*
$data = DB::table('test_records')
                ->select('student_id', DB::raw('SUM(obtained) as obtained,SUM(total) as total'))->where('class_id','=',$request->schoolclass_id)->where('session_id','=',$request->session_id)
                ->where('test_id','=',$request->test_id)
                ->groupBy('student_id')
                
                ->get();
  */

              //  dd($data);
$pdf = \PDF::loadView('Report.positionspdf',compact('data','student'));
return $pdf->stream('results.pdf');//its just a name of files which is downloaded


      }
   public function allStudents()
    {
    	
$data=Students::all();


  
    	$pdf = \PDF::loadView('Report.pdf',compact('data'));
return $pdf->stream('students.pdf');
        //return view('Dashboard.dashboard');
    }

     public function marksheet()
    {
        $test=TestType::all();
    	$sc=SchoolClass::all();
        $section=Section::all();
        $session=Session::all();
        $subject=Subject::all();



return view('Report.marksheet')->withtest($test)->withsubject($subject)->withsection($section)->withsession($session)->withschoolclass($sc);
    }
    public function marksheetpdf(Request $request)
    {
       if($request->date==null){

        return back();
       }
       else{


$data = TestRecord::distinct()->where('session_id','=',$request->session_id)->where('class_id','=',$request->schoolclass_id)->where('section_id','=',$request->section_id)->where('subject_id','=',$request->subject_id)->where('date','=',$request->date)->get(['student_id','class_id','section_id','session_id','subject_id','obtained','total']);

//dd($data);

        $pdf = \PDF::loadView('Report.marksheetpdf',compact('data'));
return $pdf->stream('students.pdf');
       } //return view('Dashboard.dashboard');
    }

    public function resultcard($studentid){
        $student=Students::where('id',$studentid)->first();
       $data=TestRecord::distinct()->where('student_id','=',$studentid)->where('session_id','=',$student->session_id)->get(['subject_id','obtained','total']);
       $obtained = TestRecord::where('student_id','=',$studentid)->where('session_id','=',$student->session_id)->sum('obtained');

       $total = TestRecord::where('student_id','=',$studentid)->where('session_id','=',$student->session_id)->sum('total');
      // dd($balance);
$pdf = \PDF::loadView('Report.resultcard',compact('data','student','obtained','total'));
//dd($pdf);
return $pdf->download('resultcard.pdf');
        


    }


    public function getDate(){

$dates=TestRecord::distinct()->where('class_id','=',$_POST['schoolclass_id'])->where('section_id','=',$_POST['section_id'])->where('session_id','=',$_POST['session_id'])->where('subject_id','=',$_POST['subject_id'])->get(['date']);
$dependent=$_POST['dependent'];
$output='<option value="">Select '.ucfirst($dependent).'</option>';
//$dates=TestRecord::distinct()->where('class_id','=',$_POST['schoolclass_id'])->get(['date']);

foreach($dates as $row)
{
$output.='<option value="'.$row->date.'">'.$row->date.' </option>';

}

return response($output);

    }
}
