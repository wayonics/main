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
      <nav> <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.php">Home</a></li>
         
           <li><a href="#">MASTERS</a>
             
          </li>
		  
		  
		  
		   <li><a href="#">TRANSACTIONS</a>
            <ul>
              <li><a href="waste.php">DAY WISE WASTE STOCK QUANTITY</a></li> 
			  <li><a href="dispatch.php">DISPATCH</a></li> 
			  
            
             
               </ul>
          </li>
	  
		   <li><a href="#">REPORTS</a>
		   <ul>
		     <li><a href="wastereport.php">DAY WISE WASTE STOCK QUANTITY REPORT</a></li>
			  <li><a href="dispatchreport.php">DISPATCH REPORT</a></li> 
		   </ul>
             
          </li>
		 <li><a href="logout.php">LOGOUT</a></li>
           
        </ul>
<?php
}
else
{
    header('location:../index.php');
}
?>
