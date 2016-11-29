<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
<form name="frm1" id="frm1" method="post" enctype="multipart/form-data">
      <label>SEARCH:</label>
      <input name="tag" type="text" id="tag" size="20">
      <input name="tag1" type="text" id="tag1" size="20">
      </form>
      <script>
        $(document).ready(function() {
            $("#tag").change(function() {
                $.ajax({
                    type: "POST",
                    url: "autocomplete1.php",
                    data: {
                        tag: $("#tag").val("$request")
                    },
                    success: function(result) 
					 {
                        // show returned message in a pop up
                        //doc#ument.write(result);
						  $("#tag1").val();
                    }
					
					
               });
          });
     });
      </script>
</body>
</html>