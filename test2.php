				<main> 
					<h1 class="italic centrat"><span class="litera italic">Formular Reservare</h1><br />
						<form name="formular" enctype="multipart/form-data" method="post" action="inserare.php" class="centrat">
							<table class="login centrat">
								<tr>
									<td>adăugarea clienților în baza de date:</td>
									<td> 
										<select name="combo">
											<option selected value="hotel">(clienti)</option>

											<?php
											include("conn.php");

											class clienti {
												public $id_cl;
												public $Nume;
												
											}

											if(isset($cnx)) {
												$cda= "SELECT * FROM clienti";
												$stmt = $cnx->prepare($cda);
												$stmt->execute();
												while ($categ = $stmt->fetchObject('clienti')) {
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