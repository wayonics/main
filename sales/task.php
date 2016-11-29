<?php   

?>
<script src="jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function(){
	  $("#firstName").change(function(){
		  var firstName=$(this).val();
		   if(firstName != ''){
		 	      $.ajax({
                              type:"post",
                              url:"insert_process.php",
                              data:"firstName="+firstName,
							  datatype:"json",
				              success:function(data){ $("#lastname").val(data);
							    $('#ename').css( "background-color","#B3CBD6"  ) 
							 $('#ename').animate({backgroundColor: "#fff",});
							   }
                                
	                                                       });
		   }
		   else{
			   $("#lastname").val("");
			   }
		  });
	 });
</script>
<!DOCTYPE html>
<html>
<head>
<title>Systems Request </title>

</head>
<body>

<div align="center">

<form action = "insert.php" method ="post" class="form" style="width: 285px; height: 192px">

<br><br>First Name<br>
<input type="text" id="firstName" name="firstName">

<br>&nbsp;Last Name<br>
<input type="text" id="lastname" name="lastname" ><br><br>

<input type="submit" value= "Submit Name "><br>

</form>
</div>
</body>
</html>