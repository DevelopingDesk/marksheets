@extends('Dashboard/dashboard')

@section('content')

<h2 style="text-align: center;"> All Students</h2>

<div style="background-color: white">
	




<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
            	<th>Id</th>
                <th>Student Name</th>
                <th>Father Name</th>
                <th>RollNumber</th>
                <th>DOB</th>
                <th>Enrollment Date</th>
                <th>Class</th>
                <th>Section</th>
                <th>Fall/Session</th>
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
               
                <td class="data">{{$cls->enrollment_date}}</td>
                <td class="data">{{$cls->schoolClass->name}}</td>
                <td class="data">{{$cls->section->name}}</td>
                <td class="data">{{$cls->session->name}}</td>
                <td>
              
                	
                <a href="{{route('student.delete',$cls->id)}}" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</a>
               
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



 
</div>

  
</div>


@endsection


