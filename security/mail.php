 <?php
 //session_start();
   include 'db.php';
    
    $bid=$_SESSION['bid'];
	 include 'db.php';
	 $dt=date("d/m/Y");
 
 $x=mysql_query("select * from totalresult where bid='$bid' and count=0")or die(mysql_error());
$x1=mysql_num_rows($x);
if($x1==true)
{ 
	$v=mysql_query("select gmail,name from studentlogin where batchid='$bid'")or die(mysql_error());
	$v1=mysql_num_rows($v);
	$v2=mysql_fetch_array($v);
	 $em=$v2[0];
	 $name=$v2[1];
	  
$subject="WEIGHBRIDGE REPORT   ".$dt;
//$message=rand(0000,9999);
$mail=$em;
include "classes/class.phpmailer.php"; // include the class name
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug=1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "trylogic.preassessment@gmail.com";
$mail->Password = "nagaraju417";
$mail->SetFrom("trylogic.preassessment@gmail.com");
$mail->Subject =$subject;
     
$mail->Body =" ";

 
$mail->AddAddress($mail1);
$mail->AddAddress($mail2);
$mail->AddAddress($mail3);
$mail->AddAddress($em);


 if(!$mail->Send())
   {
	echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else
	{
echo "mail send";
	}
	 
	 
 }
 else
 {
 echo "batch id not available";
 }
	?>
     