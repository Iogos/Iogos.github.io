<!DOCTYPE html>
<html lang="en">
<head>
    <title>adaugare clienti</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/skin-2.css">
	<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery.fancybox-1.3.4.css">
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
    <script src="js/jquery.fancybox-1.3.4.pack.js"></script>
    <script>
		$(document).ready(function(){
			$("a.plus").fancybox({
				'transitionIn'	:	'elastic',
				'transitionOut'	:	'elastic',
				'speedIn'		:	600, 
				'speedOut'		:	200, 
				'overlayShow'	:	true
			})
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
                <li><a href="index.html">HOME</a></li>
                <li><a href="rooms.html">ROOMS</a></li>
                <li><a href="reservation.html">RESERVATION</a></li>
                <li><a href="review.html">REVIEWS</a></li>
                <li class="current"><a href="sign_in.html">SIGN IN</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
            <div class="clear"></div>
        </div> 
    </div>
    </header>
  <!--==============================content================================-->

		<div class="pagina"> 

			<div id="continut"> 

				<main> 
					<h1 class="italic centrat"><span class="litera italic">Formular Reservare</h1><br />
						<form name="formular" enctype="multipart/form-data" method="post" action="inserare.php" class="centrat">
							<table class="login centrat">
								<tr>
									<td>adăugarea clienților în baza de date:</td>
									<td> 
										<select name="combo">
											<option selected value="hotel">(rezrvari)</option>

											<?php
											include("conn.php");

											class clienti {
												public $camere;
												public $clienti;
												
											}

											if(isset($cnx)) {
												$cda= "SELECT * FROM hotel";
												$stmt = $cnx->prepare($cda);
												$stmt->execute();
												while ($categ = $stmt->fetchObject('hotel')) {
													echo '<option value="' . $categ->id_cl . '">' . $categ->Nume . '</option>\n';
													echo '<option value="' . $categ->id_cl . '">' . $categ->Prenume . '</option>\n';

												}
												$cnx = null;
											}
											?>
										</select>
									</td>
								</tr>

								<tr>
									<td>Selectati imaginea:</td>
									<td><input type="file" name="fisier"  /></td>
								</tr>

								<tr>
									<td>input type="submit" name="Submit" value="Adauga"</td>
									<td><input type="reset" name="Reset" value="Sterge"</td>
								</tr>
							</table>
						</form>

					</main> 



				<!--	<main> 
						<h1 class="italic centrat"><span class="litera italic">Adauga clienti</h1><br />
							<form name="formular" enctype="multipart/form-data" method="post" action="inserare.php" class="centrat">
								<table class="login centrat">

									<tr>
										<td>Numele: </td>
										<td><input type="text" name="nume" /></td>
									</tr>

									<tr>
										<td>Prenumele: </td>
										<td><input type="text" name="nume" /></td>
									</tr>

									<tr>
										<td>Prezentare:</td>
										<td><textarea name="prez"></textarea></td>
									</tr>

									<tr>
										<td>Pastrare:</td>
										<td><textarea name="pastr"></textarea></td>
									</tr>

									<tr>
										<td>Limbajul florilor:</td>
										<td><textarea name="limbaj"></textarea></td>
									</tr>

									<tr>
										<td>Pretul:</td>
										<td><input type="text" name="pret" /></td>
									</tr>

									<tr>
										<td><input type="submit" name="submita" value="Adauga"></td>
										<td><input type="reset" name="submitr" value="Sterge"></td>
									</tr>

								</tr>
							</table>
						</form>
					</main> 



				</div> <!--de la continut -->

		


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