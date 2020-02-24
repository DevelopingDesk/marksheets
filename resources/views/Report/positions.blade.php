@extends('Dashboard/dashboard')
@section('content')


<h1 style="text-align: center;color: green">STUDENTS POSITIONS MARKSHEET </h1>
  <div class="panel-body">
			<form role="form" class="form-horizontal" method="post" action="{{route('report.positionspdf')}}">

        {{csrf_field()}}
							<div class="form-group">
							
						
					
              <div class="col-md-3" >
                
              <div class="input-group input-icon right">
                  
                  <select name="schoolclass_id" id="schoolclass_id" class="form-control">
                    <option value="">Select Class</option>
                    
                    @foreach($schoolclass as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
              
               <div class="col-md-3" >
                
              <div class="input-group input-icon right">
                  
                  <select name="session_id" id="session_id" class="form-control">
                    <option value="">Select Fall</option>
                    
                    @foreach($session as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
               
               <div class="col-md-3" >

                 <div class="input-group input-icon right">
                  
                  <select name="test_id" class="form-control testtype" data-dependent="testtype" >
                    <option>Select Exam Type</option>
                    
                    @foreach($testype as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                </div>
</div>
              <div class="col-md-2" >

                 <div class="input-group input-icon right">
                  
                  <div class="move-right" >
              <button class="btn btn-primary btn-lg btn-block">Download</button>
            </div>
                </div>
</div>      
           
             
           
           
						</div>
						
		 
	
					</form>		
	</div>
	

 

@endsection

