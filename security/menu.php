<?php
//session_start();
if($_SESSION['user'])
{
?>
 
<body>
  <div id="main">
    <header>
      <div id="logo">
        
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><span> <b class="t"><font color="#FFFFFF"><center>Jyotirmaye Textiles Pvt.Ltd</font></b></span></h1>
         
      
      </div>
      <nav>
 <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.php">Home</a></li>
         
           <li><a href="#">MASTERS</a>
            </li>
		   
		   <li><a href="#">TRANSACTIONS</a>
            <ul>
              <li><a href="igr.php">INWARD GATE REGISTER</a></li> 
			  <li><a href="wbe.php">WEIGH BRIDGE ENTRY</a></li> 
			    </ul>
          </li>
	   
		   
		   <li><a href="#">REPORTS</a>
            <ul>
                <li><a href="igrreport.php">INWARD GATE REGISTER REPORT</a></li> 
				 <li><a href="wbereport.php">WEIGH BRIDGE REPORT</a></li> 
            </ul>
          </li>
		  
		 <li><a href="pwd.php">CHANGE PASSWORD</a></li>
          
		 <li><a href="logout.php">LOGOUT</a></li>
           
        </ul>
<?php
}
else
{
    header('location:../index.php');
}
?>
