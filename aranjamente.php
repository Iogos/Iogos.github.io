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
    include("conn.php");

     class Produse {
    public $id_produs;
    public $fisier_imagine;
    public $imagine_mare;
    public $id_categ;
    public $nume_produs;
    public $prezentare;
    public $pastrare;
    public $limbajul_florilor;
    public $pret;
  }
  if(isset($cnx)) {
  $cda= "SELECT * from produse WHERE id_categ =2";
  $stmt = $cnx->prepare($cda);
  $stmt->execute();
  echo "<div class=\"imagini_mici\">";
  while ($prod = $stmt->fetchObject('Produse')) {
  $img = $prod->fisier_imagine;
  $id = $prod->id_produs;
  echo '<a href="element.php?idprod='.$id.'" class=\"buchet_mic\"><img src="imagini/'.$img.'" alt=""/></a>';
 }
  $cnx = null;
 }
 ?>
 </div>
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