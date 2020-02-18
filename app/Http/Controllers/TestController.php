<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestType;
class TestController extends Controller
{
     private	$extra=null;
    public function create(){
$all=TestType::all();
//dd($all);
    	return view('TestType.create')->withextra($this->extra)->withtestype($all);
    }
    public function store(Request $request){
$section=new TestType();
$all=TestType::all();

$section->name=$request['name'];
$section->save();
return back()->withTestType($all);


    }


  

public function delete($id){
$rec=TestType::where('id',$id)->first();
$rec->delete();
return back();

}
public function edit(){

$rec=TestType::where('id',$_POST['id'])->first();

$rec->name=$_POST['name'];
$rec->update();
return response($_POST['name']);

}
}
