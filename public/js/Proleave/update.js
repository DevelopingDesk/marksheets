


var name=null;
var classid=null;
var sessionid=null;
var sectionid=null;
var studentid=null;
var classname=null;

$(".promote").click(function (event) {

	
     name = $(this).closest("tr").find("td:eq(1)").text();
     $('#session_id').on('change', function() {
  sessionid=this.value
});


     $('#schoolclass_id').on('change', function() {
  classid=this.value
});    

      $('#section_id').on('change', function() {
  sectionid=this.value
}); 



     studentid = $(this).closest("tr").find("td:eq(0)").text();

      //this is for updation value in data after data entery
    classname = $(this).closest("tr").find("td:eq(5)");
    sessionname = $(this).closest("tr").find("td:eq(6)");
    sectionname = $(this).closest("tr").find("td:eq(7)");

    $('#myModal').modal();

$('#body').html(name);







});
$('#save').on('click',function(){
 // alert(sessionid);
var body=$('#body').val();
  


$.ajax({
method:'POST',
url:add,

data:{studentid:studentid,sessionid:sessionid,classid:classid,sectionid:sectionid,_token:token},
success:function(data){


classname.text(data[0]);
sessionname.text(data[2]);
sectionname.text(data[1]);
$('#myModal').modal('hide');

}


});

});

//for leave student

$(document).ready(function() {
    //set initial state.
   

    $('.leave').change(function() {
        if(this.checked) {
          var  check = confirm("Are you sure?");
           $(this).prop("checked", check);
           if(check)
           {
     studentid = $(this).closest("tr").find("td:eq(0)").text();

           	

$.ajax({
method:'POST',
url:leave,

data:{studentid:studentid,_token:token},
success:function(data){

alert(data);

}


});



           }else{
           	alert('you cancel it');

           }
        }
              
    });


});
