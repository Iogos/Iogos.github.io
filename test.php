<!DOCTYPE html> 
<html lang="ro"> 

<head>
	<meta charset="UTF-8">
	<title>Hotel</title>
	<link href="css/stil.css" rel="stylesheet">
	<!--<link href="css/reset.css" rel="stylesheet">-->

</head>

<!--<body>-->
	<body onLoad="show_clock()">
		<div class="pagina">
			<header>		
				<img class="bg" src="imagini/header_banner_africa_blog_1600x300_logo_3.jpg" width="1000px">
			</header>
		</div>	

		<div id="navcontainer"> 
			<nav> 
				<ul> 
					<li style="margin-left: -1rem;"><a href="index.html">HOME</a></li>
					<li><a href="Rooms.html">ROOMS</a></li>
					<li><a href="News.html">NEWS</a></li>
					<li><a href="Reservation.html">RESERVATION</a></li>
					<li><a href="Blog.html">BLOG</a></li>
					<li><a href="Carte_de_Oaspeti.html">CARTE DE OASPETI</a></li>
					<li><a href="Sign_In.html">SIGN IN</a></li>
					<li><a href="Contact.html">CONTACT</a></li>
				</ul> 
			</nav> 
		</div> <!-- inchid div de la navcontainer-->

		<div class="pagina"> 

			<div id="continut"> 

				<main> 
					<h1 class="italic centrat"><span class="litera italic">Formular Reservare</h1><br />
						<form name="formular" enctype="multipart/form-data" method="post" action="inserare.php" class="centrat">
							<table class="login centrat">
								<tr>
									<td>Rezervarea:</td>
									<td> 
										<select name="combo">
											<option selected value="hotel">(Alege rezervarea)</option>

                        <option value="buchete">Buchete</option>
                        <option value="aranjamente">Aranjamente</option>
                        <option value="bonsai">Bonsai</option>
                        <option value="promotii">Promotii</option>
                        <option value="dulciuri">Dulciuri</option>
                        <option value="bauturi">Bauturi</option>
                        <option value="jucarii">Jucarii</option>
                    </select>
               </td>
           </tr>

           <tr>
               <td>Selectati imaginea:</td>
               <td><input type="file" name="fisier"  /></td>
           </tr>

            <tr>
                <td><input type="submit" name="Submit" value="Adauga"</td>
                <td><input type="reset" name="Reset" value="Sterge"</td>
           </tr>
        </table>
      </form>

					</main> 



					<main> 
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

				</div> <!--de la pagina -->

				<footer> <!--pt a obtine afisare 100% -->
					<p>Posted by: Me</p> 
					<p><small>Copyright @ 2018</small></p> 
				</footer> 

			</body>
			</html>