<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {$totalteachers=User::withRole('Teacher')->get();
        $users = $admins = User::withRole('Admin')->get();
        $totalstudents=Students::where('leave','=',null)->get();
        $totalleft=Students::where('leave','!=',null)->get();
        return view('Dashboard.dashboard')->withtotalstudents(count($totalstudents))->withtotalleft(count($totalleft))->withtotalteachers(count($totalteachers))->withadmin(count($users));
    }
}
