<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wine List</title>
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
                <li><a href="index.html">HOME</a></li>
                <li class="current"><a href="rooms.html">ROOMS</a></li>
                <li><a href="reservation.html">RESERVATION</a></li>
                <li><a href="review.html">SERVICES</a></li>
                <li><a href="sign_in.html">SIGN IN</a></li>
                <li><a href="contact.html">CONTACT</a></li>
              </ul>
              <div class="clear"></div>
            </div> 
          </div>
        </header>  
        <!--==============================content================================-->
        <section id="content">
          <div class="zerogrid">
           <div class="block-1">
            <div class="col-1-4">
              <div class="pad border-right">
                <div class="block-1-title">
                  <span>01.</span>
<main>
 <?php
   function testare($data) {
      $data = trim($data); 
      $data = stripslashes($data); 
      $data = htmlspecialchars($data); 
      return $data; 
   }
   if (testare($_FILES["fisier"]["error"]) > 0) {
      echo "Error: " . $_FILES["fisier"]["error"] . "
"; 
      exit; 
   }
   if (testare($_FILES["mare"]["error"]) > 0) {
      echo "Error: " . $_FILES["mare"]["error"] . "
";
      exit; 
   }
   $numeimagine = testare($_FILES["fisier"]["name"]); 
   $poz = strrpos($numeimagine, "."); 
   $extensie = substr ($numeimagine, $poz); 
   $nmtmp = $_FILES["fisier"]["tmp_name"]; 
   $numeimaginemare = testare($_FILES["mare"]["name"]); 
   $pozm = strrpos($numeimaginemare, "."); 
   $extensiem = substr ($numeimaginemare, $pozm); 
   $nmtmpm = $_FILES["mare"]["tmp_name"]; 
   $categoria = testare($_REQUEST["combo"]); 
   $nume = testare($_REQUEST["nume"]); 
   $prezentare = testare($_REQUEST["prez"]); 
   $pastrare = testare($_REQUEST["pastr"]); 
   $limbajul = testare($_REQUEST["limbaj"]); 
   $pretul = testare($_REQUEST["pret"]);
   
   include("conn.php");
   if(isset($cnx)) {
   $cda= "INSERT INTO produse (id_produs, fisier_imagine, imagine_mare, id_categ, nume_produs, prezentare, pastrare, limbajul_florilor, pret) VALUES (null, :numeimagine, :numeimaginemare, :idcateg, :numeprod, :prez, :pastrare, :limbaj, :pret)";
   $stmt = $cnx->prepare($cda); 
   $stmt->bindParam(':numeimagine', $numeimagine, PDO::PARAM_STR);
   $stmt->bindParam(':numeimaginemare', $numeimaginemare, PDO::PARAM_STR);
   $stmt->bindParam(':idcateg', $categoria, PDO::PARAM_STR); 
   $stmt->bindParam(':numeprod', $nume, PDO::PARAM_STR); 
   $stmt->bindParam(':prez', $prezentare, PDO::PARAM_STR);
   $stmt->bindParam(':pastrare', $pastrare, PDO::PARAM_STR);
   $stmt->bindParam(':limbaj', $limbajul, PDO::PARAM_STR);
   $stmt->bindParam(':pret', $pretul, PDO::PARAM_STR);
   // se foloseste PARAM_STR chiar si pentru numere 
   $stmt->execute(); 
   // Preiau ID-ul pozei introduse in baza si construiesc un nou nume 
   $id = $cnx->lastInsertId(); 
   $numeimaginenou = "imagine".$id.$extensie; 
   $numeimaginemarenou = "imagine".$id."M".$extensie; 
   $cda = "UPDATE produse SET fisier_imagine='$numeimaginenou' WHERE id_produs = $id";
   $stmt = $cnx->prepare($cda); 
   $stmt->execute();
   // Construiesc calea pe care sa incarc fisierul 
   $cale = "imagini/$numeimaginenou"; 
   $rezultat = move_uploaded_file($nmtmp, $cale); 
   if (!$rezultat) { 
      echo "Eroare la incarcarea fisierului"; 
      exit; 
   } 
   $cda = "UPDATE produse SET imagine_mare='$numeimaginemarenou' WHERE id_produs = $id";
   $stmt = $cnx->prepare($cda); 
   $stmt->execute(); 
   $calem = "imagini/$numeimaginemarenou"; 
   $rezultat = move_uploaded_file($nmtmpm, $calem); 
   if (!$rezultat) { 
      echo "Eroare la incarcarea fisierului"; 
      exit; 
   }
   
   echo "<p class=\"inserare centrat\">";
   echo "<h1 class=\"italic centrat\"><span class=\"litera italic\">P</span>rodusul<br />s-a adaugat in baza de date</h1><br />";
   echo "<form class=\"centrat\"><input type=button value=\"Alt produs\"
      onClick=\"location.href='adaugare.php'\">";
   echo "<input type=button value=\"Home\" onClick=\"location.href='index.html'\"></form>";
   echo "</p><br /><br />";
   echo "<p class=\"inserare centrat\">Numele vechi al fisierului: $numeimagine</p>";
   echo "<p class=\"inserare centrat\">Numele vechi al fisierului mare:   $numeimaginemare</p>";
   echo "<p class=\"inserare centrat\">Categoria fisierului: $categoria</p>";
   echo "<p class=\"centrat inserare\">Noul nume al fisierului: $numeimaginenou</p>";
   echo "<p class=\"inserare centrat\">Imaginea mare: $numeimaginemarenou</p>"; 
   $cnx = null;
}
?>
</main>
            </div>
          </div>
        </div>
      </div>
    </div>




</section> 

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