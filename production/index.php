
<?php
session_start();
if($_SESSION['user'])
{
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Jyotirmaye Textiles</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body> 
       <?php include "menu.php"; ?>
      </nav>
    </header>
    <div id="site_content" >
      <ul id="images" >
        <li><img src="images1/1.jpg" width="600" height="300" alt="seascape_one" /></li>
        <li><img src="images1/2.jpg" width="600" height="300" alt="seascape_two" /></li>
        <li><img src="images1/3.jpg" width="600" height="300" alt="seascape_three" /></li>
        <li><img src="images1/4.jpg" width="600" height="300" alt="seascape_four" /></li>
        <li><img src="images1/5.jpg" width="600" height="300" alt="seascape_five" /></li>
        <li><img src="images1/6.jpg" width="600" height="300" alt="seascape_seascape" /></li>
      </ul>
	    
 
 
</div>
  
 <style>
 #main-wrap {
    /* overflow to handle inner floating block */
    overflow: hidden;
	background:#999999;
}

#sidebar {
    float: left;
    width: 50%;
}

#content-wrap {
    float: right;
    width: 50%;
}   
input{
border-radius:8px;
height:20px;
}
 </style>
  
 </div>
	<br>	<br>	<br>	<br>	<br>
	 
	
    <footer>
      <p>Copyright | <a href="http://www.css3templates.co.uk"> </a></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>


<?php
}
else
{
    header('location:../index.php');
}
?>
