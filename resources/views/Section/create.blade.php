@extends('Dashboard/dashboard')
@section('content')
<div id="myModal" style="margin-top:30px"  class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <form role="form" id="myform" >
            
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align: center">Edit Section</h4>
      </div>
      <div class="modal-body" width="30px" >
       <textarea id="body" name="body" class="form-control" placeholder="your report must be solid"></textarea>
          <textarea id="idsection" name="idsection" style="display: none" class="form-control" placeholder="your report must be solid"></textarea>
     
       <input type="hidden" name="_token" value="{{Session::token()}}">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
     <button id="save" type="button" class="btn btn-primary" >Save</button> 
      </div>
        </form>

    </div>

  </div>
</div>

<h1 style="text-align: center;color: green">Enrol New Sections</h1>
  <div class="panel-body">
			<form role="form" class="form-horizontal" action="{{route('section.store')}}">
							<div class="form-group">
							<label class="col-md-2 control-label">Section Name</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-user"></i>
									</span>
									<input id="name" name="name" required="true" class="form-control1" type="text" placeholder="section name">
								</div>
							</div>
							
						</div>
						
						
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-warning btn">Submit</button>
				<button class="btn-success btn">Cancel</button>
				
			</div>
		</div>
	
					</form>		
	</div>
	
	<div style="background-color: white">
		
	
<div style="background-color: white">
<h2 style="text-align: center;"> All Sections</h2>


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
            	<th>Id</th>
                <th>Name</th>
                <th>Actions</th>


               
                
            </tr>
        </thead>
       
        <tbody>
        	@foreach($section as $cls)
            <tr>

                <td>{{$cls->id}}</td>
                <td>{{$cls->name}}</td>
                <td><a   href="#" id="edit" class="btn btn-xs btn-primary edit"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a href="{{route('delete.section',$cls->id)}}" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</a>
                <a href="{{route('section.create')}}" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-plus"></i> Add Section</a>
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
<script type="text/javascript" src="{{asset('js/Section/update.js')}}"></script>
<script type="text/javascript">
var token='{{Session::token()}}';
var add='{{route('edit.sectionclass')}}';

</script> 
</div>

</div>
@endsection

