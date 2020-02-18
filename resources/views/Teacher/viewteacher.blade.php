@extends('Dashboard/dashboard')

@section('content')


<div style="background-color: white">
<h2 style="text-align: center;"> All Teachers</h2>


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
            	<th>Id</th>
                <th> Teacher Name</th>
               
                
                <th>Teacher Email</th>
                
<th>Actions</th>



               
                
            </tr>
        </thead>
       
        <tbody>
        	@foreach($student as $students)
            <tr>

                <td>{{$students->id}}</td>
                <td>{{$students->name}}</td>
              
               
                <td>{{$students->email}}</td>

               



                <td>
                <a href="{{route('delete.teacher',$students->id)}}" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</a>
                
           </td>
               
            </tr>
           @endforeach
        </tbody>
    </table>
<script type="text/javascript">
	
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

 
</div>
@endsection
