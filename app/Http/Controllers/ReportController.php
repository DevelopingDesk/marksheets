<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
class ReportController extends Controller
{
   public function allStudents()
    {
    	//dd(1);
$data=Students::all();

    	$pdf = \PDF::loadView('Report.pdf',compact('data'));
return $pdf->download('students.pdf');
        //return view('Dashboard.dashboard');
    }
     public function marksheets()
    {
    	//dd(1);
return view
    }
}
