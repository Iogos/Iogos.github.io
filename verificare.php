<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
	<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsiveslides.css" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
    <script type="text/javascript" src="js/responsiveslides.js"></script>
	<script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        maxwidth: 948,
        namespace: "centered-btns"
      });
    });
  </script>
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
                <li><a href="review.html">REVIEWS</a></li>
                <li><a href="sign_in.html">SIGN IN</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
            <div class="clear"></div>
         </nav>

				
          <div class="phone-number">Call us for reservation:<strong>1-800-123-1234</strong></div>	
      	</div> 
		</div>
    </header>  
  <!--==============================content================================-->
 <?php
   include("conn.php");

function testare($data) {
   $data = trim($data); 
   $data = stripslashes($data); 
   $data = htmlspecialchars($data); 
   return $data; 
}

class Admin {
   public $id_admin;
   public $Nume;
   public $Parola;
}

$n = testare($_REQUEST["numeletau"]); 
$p = testare($_REQUEST["parolata"]);

if(isset($cnx)) {

   $cda= "SELECT * from admin";
   $stmt = $cnx->prepare($cda);
   $stmt->execute();
   $gasit = false;

   while ($utilizator = $stmt->fetchObject('Admin'))
    {
      if($utilizator->Nume == $n && $utilizator->Parola == $p) 
      {
         echo '<h1 class="italic centrat"><span class="litera italic"> S</span>unteti autorizat</h1><br />';
    echo '<form class="centrat" method="post" action="Adauga_camera.php">';
         echo '<input type="submit" name="submit1" value="Adaugare">';
         echo '</form></center>';
         $gasit = true;
         break;
      }
   }
   if(!$gasit) 
   {
      echo '<h1 class="italic centrat"><span class="litera italic"> NU</span>aveti acces in baza de date</h1><br />';
      echo '<form class="centrat"><input type="button" value="Mai incearca" onClick="location.href=\'login.html\'"></form></center>';
   }
   $cnx = null;
}

?>

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