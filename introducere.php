<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
	<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
<div class="bg-top">
<div class="bgr">
  <!--==============================header=================================-->
    <header>
    <div class="zerogrid">
        <a href="index.html"><img src="images/00_0L_A3_sunwing-banner.jpg" alt=""></a>
        <nav>  
            <ul class="menu">
                <li class="current"><a href="index.html">HOME</a></li>
                <li><a href="rooms.html">ROOMS</a></li>
                <li><a href="reservation.html">RESERVATION</a></li>
                <li><a href="review.html">SERVICES</a></li>
                <li><a href="sign_in.html">SIGN IN</a></li>
                <li class="current"><a href="contact.html">CONTACT</a></li>
            </ul>
            <div class="clear"></div>
        </div> 
    </div>
    </header>  
  <!--==============================content================================-->
<main>
 <?php
   function testare($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }

   $nume=testare($_REQUEST["nume"]);
   $prenume=testare($_REQUEST["prenume"]);
   $email=testare($_REQUEST["email"]);
   $mesaj=testare($_REQUEST["mesaj"]);

   include("conn.php");
   if(isset($cnx)) {

      $cda = "INSERT INTO vizitatori (nr, nume,prenume, email, mesaj)VALUES ('', :nume,:prenume, :email, :mesaj)";
      $stmt = $cnx->prepare($cda); 
      $stmt->bindParam(':nume', $nume, PDO::PARAM_STR);
      $stmt->bindParam(':prenume', $prenume, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':mesaj', $mesaj, PDO::PARAM_STR);
      $stmt->execute(); 

      echo "<p class=\"inserare centrat\">"; 
      echo "<h1 class=\"italic centrat\"><span class=\"litera italic\">M</span>esajul dv. <br />s-a adaugat in cartea noastra de oaspeti<br /><br /> Va multumim!</h1><br />";

      echo "<br /><br /><br /><br />";
      echo "Puteti citi <a href=\"vizite.php\">alte impresii despre sit </a>";
      echo "sau puteti completa un alt <a href=\"opinie.html\">Formular cu impresii</a></p>";
    $cnx = null;
   
}
?>
</main>

<!--==============================footer=================================-->
 <footer>
  <div class="zerogrid">
      <p>2018  Mihai<br>
      Designed by Mihai</p> 
  </div>
  </footer> 
</div> 
</div>       
</body>
</html>