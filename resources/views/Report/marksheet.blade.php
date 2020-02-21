@extends('Dashboard/dashboard')
@section('content')


<h1 style="text-align: center;color: green">MARKSHEETS DOWNLOAD</h1>
  <div class="panel-body">
			<form role="form" class="form-horizontal" method="post" action="{{route('report.marksheetpdf')}}">

        {{csrf_field()}}
							<div class="form-group">
							
						
					
              <div class="col-md-2" >
                
              <div class="input-group input-icon right">
                  
                  <select name="schoolclass_id" id="schoolclass_id" class="form-control">
                    <option value="">Select Class</option>
                    
                    @foreach($schoolclass as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
               <div class="col-md-2" >
                
              <div class="input-group input-icon right">
                  
                  <select name="section_id" id="section_id" class="form-control">
                    <option value="">Select Section</option>
                    
                    @foreach($section as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
               <div class="col-md-2" >
                
              <div class="input-group input-icon right">
                  
                  <select name="session_id" id="session_id" class="form-control">
                    <option value="">Select Fall</option>
                    
                    @foreach($session as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
               <div class="col-md-2" >
                
              <div class="input-group input-icon right">
                  
                  <select name="subject_id" id="subject_id" class="form-control">
                    <option value="">select subject</option>
                   
                    
                    @foreach($subject as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
               <div class="col-md-2" >

                 <div class="input-group input-icon right">
                  
                  <select name="test_id" class="form-control testtype" data-dependent="testtype" >
                    <option>select test</option>
                    
                    @foreach($test as $obj)
                   
                    
                    <option value="{{$obj->id}}">{{$obj->name}}</option>
                    @endforeach
                  </select>
                </div>
</div>
               <div class="col-md-2" >

                  <div class="input-group input-icon right">
                  
                  
                  <select class="form-control "  id="testtype" name="date">
                    


                  </select>
                </div>

            </div>
            <div class="row">
           <div class="move-right" >
              <button class="btn btn-primary btn-lg btn-block">Download</button>
            </div>   
            </div>
           
						</div>
						
		 
	
					</form>		
	</div>
	
	<div style="background-color: white">
		


</div>
<script type="text/javascript">
var token='{{Session::token()}}';
var add='{{route('report.getdate')}}';

</script> 

<script type="text/javascript">
  
  $('.testtype').change(function(){

var schoolclass_id=$('#schoolclass_id').val();
var section_id=$('#section_id').val();
var session_id=$('#session_id').val();
var subject_id=$('#subject_id').val();

var dependent=$(this).data('dependent');
  var select=$(this).attr("id");
  var test_id=this.value; 
  
//alert(dependent);
    $.ajax({
method:'POST',
url:add,

data:{dependent:dependent,schoolclass_id:schoolclass_id,section_id:section_id,session_id:session_id,subject_id:subject_id,test_id:test_id,_token:token},
success:function(data){
$('#'+dependent).html(data); 

}


});


//alert('hi');
  });
</script>
@endsection

