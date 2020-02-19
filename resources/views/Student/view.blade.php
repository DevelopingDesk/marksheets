@extends('Dashboard/dashboard')

@section('content')

<div id="myModal" style="margin-top:30px"  class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <form role="form" id="myform" >
            
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align: center">Promote Student</h4>
      </div>
      <div class="modal-body" width="30px" >
       <textarea id="body" name="body" class="form-control" placeholder="your report must be solid"></textarea>
          <textarea id="idsection" name="idsection" style="display: none" class="form-control" placeholder="your report must be solid">Student Name:</textarea>
     
       <input type="hidden" name="_token" value="{{Session::token()}}">
      
       <select id="session_id" class="form-control">
                   <option>Select Session</option> 
                    
                    @foreach($session as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
 <select id="schoolclass_id" class="form-control">
                   <option>Select Class</option> 
                    
                    
                    @foreach($schoolclass as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                   <select id="section_id" class="form-control">
                   <option>Select Section</option> 
                    
                    
                    @foreach($section as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
     <button id="save" type="button" class="btn btn-primary" >Save</button> 
      </div>
        </form>

    </div>

  </div>
</div>
<style type="text/css">
.blinking{
    animation:blinkingText 1.4s infinite;
}
@keyframes blinkingText{
    0%{     color: #000;    }
    49%{    color: red; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: #000;    }
}
></style>
<h2 style="text-align: center;"> All Students <h5 style="color: red" class="blinking">Report card for only anual exam</h5></h2>
<div class="row">
  <div class="col-md-3">
    
  </div>
  <div class="col-md-3">
    
  </div><div class="col-md-3">
    
  </div><div class="col-md-3">
<select style="margin-left: 80px" name="testtype">
  
  <option>Select anunal result</option>
  @foreach($test as $obj)
  <option value="{{$obj->id}}">{{$obj->name}}</option>

  @endforeach
</select>    
  </div>
</div>


<div style="background-color: white">
	



<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
            	<th>id</th>
                <th>Student Name</th>
                <th>Father Name</th>
                <th>RollNumber</th>
                <th>DOB</th>
               
                <th>Class</th>
                <th>Section</th>
                <th>Session</th>
                <th>Leave</th>
                
                <th>Actions</th>  
                
            </tr>
        </thead>
       
        <tbody>
        	@foreach($students as $cls)
            <tr>

               <td>{{$cls->id}}</td>
                <td class="data">{{$cls->name}}</td>
                <td class="data">{{$cls->fatherName}}</td>
                <td class="data">{{$cls->rollnumber}}</td>
                <td class="data">{{$cls->dob}}</td>
               
              
                <td class="data">{{$cls->schoolClass->name}}</td>
                <td class="data">{{$cls->section->name}}</td>
                <td class="data">{{$cls->session->name}}</td>
                <td>  <input type="checkbox" name="leave" class="leave"></td>
                <td>
              
                	
                <a href="{{route('student.delete',$cls->id)}}" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</a>
                 <a  class="btn btn-xs btn-primary promote"><i class="glyphicon glyphicon-ok promote"></i>Move</a>
                 <a  href="{{route('report.resultcard',$cls->id)}}" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-download promote"></i>RCard</a>
                
               
           </td>

               
            </tr>
           @endforeach
        </tbody>
    </table>
<script type="text/javascript">
	var table=null;
	$(document).ready(function() {
    table=$('#example').DataTable();



} );





</script>

<script type="text/javascript" src="{{asset('js/Proleave/update.js')}}"></script>
<script type="text/javascript">
var token='{{Session::token()}}';
var add='{{route('student.promote')}}';

</script>
<script type="text/javascript">
var token='{{Session::token()}}';
var leave='{{route('student.leave')}}';

</script>

 
</div>

  
</div>


@endsection


