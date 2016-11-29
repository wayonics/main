 <?php
function setHeader($excel_file_name)//this function used to set the header variable
	{
		
	
		header("Content-type: application/octet-stream");//A MIME attachment with the content type "application/octet-stream" is a binary file.
		//Typically, it will be an application or a document that must be opened in an application, such as a spreadsheet or word processor. 
		header("Content-Disposition: attachment; filename=$excel_file_name");//with this extension of file name you tell what kind of file it is.
		header("Pragma: no-cache");//Prevent Caching
		header("Expires: 0");//Expires and 0 mean that the browser will not cache the page on your hard drive
		 
	}
        
       if(isset($_POST['submit']))
       { 
	   		
 date_default_timezone_set("asia/calcutta");
 date_default_timezone_get();
 
 $dt=date("Y/m/d h:i:s a"); 
	 
		
        $body = $_POST['body'];
		
        setHeader("stock report($dt).xls");
        
		echo $body;
		
        
       }
	   ?>