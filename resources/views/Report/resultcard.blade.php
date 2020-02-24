

<style type="text/css">
	.div2{
		margin-left: 550px;
		margin-top:-65px;
	}

</style>
<center><h2>Govt Elementary School Chhangi</h2></center>
<hr><hr><hr>
<center><h3>Session:{{$student->session->name}}

</h3><p>Marksheet class:{{$student->schoolClass->name}}</p></center>
<center></center>
<div class="row">
	<div class="div1">
		Roll No:{{$student->rollnumber}}<br>
		Name:{{$student->name}}<br>
		Father's Name:{{$student->fatherName}}

	
	</div>
	
	<div class="div2">
		Enrollment:{{$student->enrollment_date}}<br>
		DOB:{{$student->dob}}
	
	</div>
		
</div>
<br><hr>
<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  text-align: left;
}
#obtained{
	margin-left: 530px;
}
#total{

	margin-left: 530px;
}
</style>
</head>
<body>

<table style="width:100%" id="tableid">
	
  <tr>
    <th style="width:30%">Subject</th>
    <th style="width:30%">Obtained</th>
    <th style="width:30%">Total</th>
    <th style="width:30%">Remarks</th>
  </tr>
 
 @foreach($data as $da)
  <tr>
  	
    <td>{{$da->subject->name}}</td>
    <td class="choose"> {{$da->obtained}}</td><td class="total">{{$da->total}}</td>
    <td>pass</td>
  </tr>
  
   
  
  
  @endforeach
</table>
<p id="obtained">Obtained Total:{{$obtained}}</p>
  <p id="total">Total:{{$total}}</p>





</body>


</html>

