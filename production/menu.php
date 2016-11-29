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
            <ul>
              <li><a href="departments.php">DEPARTMENTS</a></li>
               
              <li><a href="machines.php">MACHINES</a></li>
              <li><a  href="lotnos.php">LOT NO'S</a></li>
              <li><a href="stopagereason.php">STOPAGE REASONS</a></li>
			    <li><a href="countmaster.php"> COUNT MASTER</a></li>
				<li><a href="shiftdurationmaster.php"> SHIFT DURATION MASTER</a></li>
				     <li><a href="convfactor.php"> 40'S CONV FACTOR</a></li>
                <li><a href="supervisorentry.php"> SUPERVISOR ENTRY</a></li>
                <li><a href="packingmaster.php"> PACKING MASTER</a></li>
                
            </ul>
          </li>
		  
		  
		  
		   <li><a href="#">TRANSACTIONS</a>
            <ul>
              <li><a href="ringframe.php">RING FRAME PRODUCTION ENTRY</a></li> 
             <li><a href="autoconer.php">AUTO CONER PRODUCTION ENTRY</a></li> 
              
               <li><a href="preparatory.php">PREPARATORY PRODUCTION ENTRY</a></li> 
                <li><a href="powerentry.php">POWER ENTRY</a></li>
                  <li><a href="packingentry.php">PACKING ENTRY</a></li> 
               
               </ul>
          </li>
	  
		 
		  
		  
		   <li><a href="#">REPORTS</a>
            <ul>
              <li><a href="spinningproduction.php">SPINNING PRODUCTION </a></li>
             
              <li><a href="autoconerpr.php">AUTO CONER PRODUCTION REPORT</a></li>
			  <li><a href="packingstatement.php">PACKING STATEMENT</a></li>
			 
              <li><a href="spinningshiftwisepst.php">SPINNING SHIFTWISE PRODUCTION STATEMENT</a></li>
              
			  
            </ul>
			
          </li>
		  
		 <li><a href="pwd.php">CHANGE PASSWORD</a></li>
           
		 <li><a href="logout.php">LOGOUT</a></li>
           
        </ul>
		
		
		
<?php
}
else
{
    header('location:index.php');
}
?>
