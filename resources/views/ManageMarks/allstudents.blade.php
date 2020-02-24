@extends('Dashboard/dashboard')

@section('content')
<style> 
input[type=number] {
   
    padding: 3px 0px;
    
    box-sizing: border-box;
    border: none;
    border: 2px solid lightblue;
    
}
</style>



<div style="background-color: white">
<h2 style="text-align: center;">Enter Student Marks</h2>


   <div class="col-md-12">
    <div class="col-md-4" style="border:2px solid lightblue;border-radius: 15px">
    <input type="date" name="date" id="date" class="form-control" style="border:2px solid red" required="true" >
  </div>
  <div class="col-md-4" style="border:2px solid lightblue;border-radius: 15px">
    <input type="text" name="total" id="totalmarks" placeholder="Enter Total Marks" class="form-control" style="border:2px solid red" >
  </div>
  <input type="hidden" id="subjectid" name="subjectid" value="{{$subjectid}}">
  <div class="col-md-4" style="border:2px solid lightblue;border-radius: 15px">
   <select class="form-control testtype" id="test_type" name="test_type">
    <option>Select Exam Type</option>

     @foreach($exams as $exa)

     <option value="{{$exa->id}}" >{{$exa->name}}</option>
     @endforeach
   </select>
  </div>
  
</div>
<br>
<br>
<br>

   
<table id="myTable"  class="table table-striped table-bordered" cellspacing="100" width="100%">
        <thead >
            <tr>
                <th>Student Name</th>
                 <th>Father Name</th>
                 <th>Class</th>
                 <th>Session</th>
                 <th>Obtained Marks</th>
                 <th>Action</th>
            
                
            </tr>
        </thead>
       
        <tbody>
            @foreach($allstudents as $students)
            <tr>

                <td class="studentname">{{$students->name}} <input type="hidden" class="studentid" value="{{$students->id}}" ></td>
                <td class="fathername">{{$students->fatherName}}</td>
                
                <td>{{$students->schoolClass->name}} <input type="hidden" name="classid" value="{{$students->schoolClass->id}}"></td>
                <td>{{$students->session->name}} <input type="hidden" name="sessionid[]" value="{{$students->session->id}}"></td>
               
               <td  ><input class="obtainedmarks" type="number"   placeholder="Enter marks here"></td>
                <td><button class="btn-primary btnSelect">Select</button></td>

            
               
            </tr>
           @endforeach
        </tbody>
    </table>
  


</script>



<script type="text/javascript" src="{{asset('js/Marks/marks.js')}}"></script>
<script type="text/javascript">
var token='{{Session::token()}}';
var add='{{route('marks.store')}}';

</script> 


@endsection