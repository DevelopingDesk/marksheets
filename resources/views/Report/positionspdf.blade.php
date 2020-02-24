<style type="text/css">
  
  table.greenTable {
  font-family: Georgia, serif;
  border: 6px solid #24943A;
  background-color: #D4EED1;
  width: 100%;
  text-align: center;
}
table.greenTable td, table.greenTable th {
  border: 1px solid #24943A;
  padding: 3px 2px;
}
table.greenTable tbody td {
  font-size: 13px;
}
table.greenTable thead {
  background: #24943A;
  background: -moz-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
  background: -webkit-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
  background: linear-gradient(to bottom, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
  border-bottom: 0px solid #444444;
}
table.greenTable thead th {
  font-size: 12px;
  font-weight: bold;
  color: #F0F0F0;
  text-align: left;
  border-left: 2px solid #24943A;
}
table.greenTable thead th:first-child {
  border-left: none;
}

table.greenTable tfoot {
  font-size: 10px;
  font-weight: bold;
  color: #F0F0F0;
  background: #24943A;
  background: -moz-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
  background: -webkit-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
  background: linear-gradient(to bottom, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
  border-top: 1px solid #24943A;
}
table.greenTable tfoot td {
  font-size: 10px;
}
table.greenTable tfoot .links {
  text-align: right;
}
table.greenTable tfoot .links a{
  display: inline-block;
  background: #FFFFFF;
  color: #24943A;
  padding: 2px 8px;
  border-radius: 5px;
}
</style>
<center>Students Compiled Result Report</center>
<hr>

<table class="greenTable">
<thead>
<tr>
<th>Student Name</th>
<th>Father Name</th>

<th>Roll Number</th>

<th>Class</th>

<th>Section</th>
<th>Session</th>
<th>Obtained</th>
<th>Total</th>

</tr>
</thead>

<tbody>
@foreach($data as $dat)
<tr>
	
<td>{{$dat->student->name}}</td>

<td>{{$dat->student->fatherName}}</td>

<td>{{$dat->student->rollnumber}}</td>


<td>{{$dat->student->schoolClass->name}}</td>
<td>{{$dat->student->section->name}}</td>
<td>{{$dat->student->session->name}}</td>

<td>{{$dat->obtained}}</td>
<td>{{$dat->total}}</td>


</tr>
@endforeach

