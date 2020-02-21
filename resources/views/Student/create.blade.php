@extends('Dashboard/dashboard')
@section('content')
<style type="text/css">
	
	input[type=text] {
   
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid lightgreen;
    
}
input[type=password] {
   
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid red;
    
}
</style>
</style>
<h1 style="text-align: center;color: green">Enter Student Record</h1>
  <div class="panel-body">
			<form role="form" method="POST" class="form-horizontal" action="{{route('student.store')}}">
				{{csrf_field()}}
							<div class="form-group">
							<label class="col-md-2 control-label">Student Name</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									
									<input id="name" required="true" name="name" class="form-control1" type="text" placeholder="student name">
								</div>
							</div>
							
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Father Name</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									
									<input id="fathername" required="true" class="form-control1" name="fathername" type="text" placeholder="Father Name">
								</div>
							</div>
							
						</div>
					
						<div class="form-group">
							<label class="col-md-2 control-label">Student Cnic</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									
									<input id="studentcnic" class="form-control1" name="cnic" type="text" placeholder="student cnic">
								</div>
							</div>
							
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Phone Number</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									
									<input id="phone" class="form-control1" name="phone" type="text" placeholder="student phone number">
								</div>
							</div>
							
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Roll Number</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									
									<input id="rollnumber" name="rollnumber"  required="true" class="form-control1" type="text" placeholder="Student Rollnumber">
								</div>
							</div>
							
						</div>

						<div class="form-group">
							<label class="col-md-2 control-label">Enrollment Date</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									
									<input id="enrollment" name="enrollment_date" class="form-control1" type="date" placeholder="Student Enrollment Date">
								</div>
							</div>
							
						</div>
							<div class="form-group">
							<label class="col-md-2 control-label">DOB</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									
									<input id="dob" required="true" class="form-control1" name="dob" type="date" placeholder="student dob">
								</div>
							</div>
							
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Select Religon</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									
									<select name="religon" class="form-control">
										
										<option>Muslim</option>
										<option>Non Muslim</option>
									</select>
								</div>
							</div>
							
						</div>

						<div class="form-group">
							<label class="col-md-2 control-label">Select Class</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									
									<select name="class_id" class="form-control">
										@foreach($schoolclass as $class)
										<option value="{{$class->id}}">{{$class->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Select Section</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									
									<select name="section_id" class="form-control">
										@foreach($section as $sec)
										<option value="{{$sec->id}}">{{$sec->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Select Session</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									
									<select name="session_id" class="form-control">
										@foreach($session as $sec)
										<option value="{{$sec->id}}">{{$sec->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							
						</div>
						
						
						
						 <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-warning btn">Submit</button>
				<button class="btn-success btn">Cancel</button>
				
			</div>
		</div>
	 </div>
					</form>		
	</div>
	
	@endsection