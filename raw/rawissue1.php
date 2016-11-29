<?php
session_start();

  $item=$_SESSION['item'];

  $supplier=$_SESSION['supplier'];

 $bales=$_SESSION['bales'];

include 'db.php';

$q=mysql_query("select * from rawmgt where itemname='$item'")or die(mysql_error()); 
$r=mysql_num_rows($q);
$q1=mysql_fetch_array($q);	 
	if($item==$q1['itemname'] || $supplier== $q1['supplier'])
			{
			  echo $q1['itemname'];
			  echo $ba=$q1['bales']-$bales;
			   	
			   $up=mysql_query("update rawmgt set bales='$ba' where itemname='$item' or supplier='$supplier'")or die(mysql_error());
		 	  echo "jjj";
	}
   
 ?>


