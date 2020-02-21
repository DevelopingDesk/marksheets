<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;

class SessionController extends Controller
{
   
    public function create(){

$session=Session::all();

return view('Session.create')->withsession($session);



    }
      public function store(Request $request){
$class=new Session();
$all=Session::all();

$class->name=$request['name'];
$class->save();
return back()->withsession($all);


    }
     public function viewAll(){
$all=Session::all();

return view('Session.viewsession')->withsession($all);

    }
    public function delete($id){
$rec=Session::where('id',$id)->first();
$rec->delete();
return back();

}
public function edit(Request $request){

$rec=Session::where('id',$_POST['id'])->first();

$rec->name=$_POST['name'];
$rec->update();
return response($_POST['name']);

}
}
