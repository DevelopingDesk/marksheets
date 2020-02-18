@extends('Dashboard/dashboard')
@section('content')


<h1 style="text-align: center;color: green">MARKSHEETS DOWNLOAD</h1>
  <div class="panel-body">
			<form role="form" class="form-horizontal" method="post" action="{{route('report.marksheetpdf')}}">

        {{csrf_field()}}
							<div class="form-group">
							
						
					
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
                   
                    
                    @foreach($subject as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
               <div class="col-md-2" >

                 <div class="input-group input-icon right">
                  
                  <select name="test_id" class="form-control">
                    <option value="">test type</option>
                    
                    @foreach($test as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                </div>
</div>
               <div class="col-md-2" >

                  <div class="input-group input-icon right">
                  
                  
                   <input type="date" name="date">
                </div>

            </div>
           <div class="col-md-6" >
              <button class="btn-warning btn">Submit</button>
            </div>
						</div>
						
		 
	
					</form>		
	</div>
	
	<div style="background-color: white">
		


</div>
@endsection

