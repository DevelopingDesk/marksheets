 


        

var test_id=null;


$('select').on('change', function() {
  test_id=this.value;
 // alert(test_id);
});


 
 $("#myTable").on('click','.btnSelect',function(){
         var totalmarks=$("#totalmarks").val();
var subjectid=$("#subjectid").val();
var obtainedmarks=$("#obtainedmarks").val();

var date=$("#date").val();

         // get the current row
         var currentRow=$(this).closest("tr"); 
         
         var obtainedmarks=currentRow.find(".obtainedmarks").val(); // get current row 1st table cell TD value
         var studentid=currentRow.find(".studentid").val(); // get current row 2nd table cell TD value


       $.ajax({

method:'POST',
url:add,
data:{test_id:test_id,studentid:studentid,obtainedmarks:obtainedmarks,date:date,totalmarks:totalmarks,subjectid:subjectid,_token:token},
success:function(data){
alert(data);

}


});
       
    });




