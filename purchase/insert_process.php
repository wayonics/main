<?php
header('Content-Type: application/json');
$host = "localhost";
$user = "root";
$db_name= "people";
$pass= "";
$con = mysql_connect($host, $user, $pass);
$db_conx=mysql_select_db("people", $con);
$fname=  $_POST["firstName"];
	   $sql="SELECT * FROM  names WHERE firstName='$fname' ";	
		$query= mysql_query($sql)or die(mysql_error());
		$r=mysql_num_rows($query);
	$row = mysql_fetch_array($query);
	$rc	= $row["lastname"];

echo json_encode ($rc);
 
?>