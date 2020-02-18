@extends('Dashboard/dashboard')
@section('content')


<h1 style="text-align: center;color: green">Assign Classes</h1>
  <div class="panel-body">
			<form role="form" class="form-horizontal" method="POST" action="{{route('assign.store')}}">

        {{csrf_field()}}
							<div class="form-group">
							<div class="col-md-2" >
								
							<div class="input-group input-icon right" >
                  
                  <select name="teacher_id" class="form-control">
                    <option value="">Select Teacher</option>
                    
                    @foreach($teachers as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                </div>
						</div>
              <div class="col-md-2" >
                
              <div class="input-group input-icon right">
                  
                  <select name="schoolclass_id" class="form-control">
                    <option value="">Select Class</option>
                    
                    @foreach($schoolclass as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
               <div class="col-md-2" >
                
              <div class="input-group input-icon right">
                  
                  <select name="section_id" class="form-control">
                    <option value="">Select Section</option>
                    
                    @foreach($section as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
               <div class="col-md-2" >
                
              <div class="input-group input-icon right">
                  
                  <select name="session_id" class="form-control">
                    <option value="">Select Fall</option>
                    
                    @foreach($session as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
               <div class="col-md-2" >
                
              <div class="input-group input-icon right">
                  
                  <select name="subject_id" class="form-control">
                    <option value="">Select Subject</option>
                    
                    @foreach($subject as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
           <div class="col-md-2" >
              <button class="btn-warning btn">Submit</button>
            </div>
						</div>
						
		 
	
					</form>		
	</div>
	
	<div style="background-color: white">
		
	
<div style="background-color: white">
<h2 style="text-align: center;"> Assigned Classes List</h2>


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
            	<th>Id</th>
                <th>Teacher Name</th>
                <th>Class</th>
                <th>Suject</th>
                <th>Section</th>
                <th>Fall</th>
                <th>Actions</th>


               
                
            </tr>
        </thead>
       
        <tbody>
        	@foreach($data as $cls)
            <tr>

                <td>{{$cls->id}}</td>
                <td>{{$cls->userDetail->name}}</td>
                <td>{{$cls->schoolClass->name}}</td>
                
               
                <td>{{$cls->subject->name}}</td>
                <td>{{$cls->section->name}}</td>
                <td>{{$cls->session->name}}</td>
              <td>             <a href="{{route('assign.delete',$cls->id)}}" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</a>
               
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

</div>
@endsection

