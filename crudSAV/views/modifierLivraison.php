<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";
if (isset($_GET['cin'])){
	$livraisonC=new LivraisonC();
    $result=$livraisonC->recupererEmploye($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$tel=$row['tel'];
		$mail=$row['mail'];
		$adresse=$row['adresse'];
		$ville=$row['ville'];


?>
<div class="col-md-8 address_form">
						<h4>LIVRAISON</h4>
<form method="POST">
<caption>Modifier Employe</caption>

							
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">

										
											<label class="control-label">CIN: </label>
											<input class="billing-address-name form-control" type="number" name="cin" value="<?PHP echo $cin ?>" placeholder="CIN">										

										<div class="card_number_grids">
											
											<label class="control-label">Nom: </label>
											<input class="billing-address-name form-control" type="text" name="nom"  value="<?PHP echo $nom ?>"placeholder="NOM">
											
										</div>

										<div class="card_number_grids">
											
											<label class="control-label">Prenom: </label>
											<input class="billing-address-name form-control" type="text" name="prenom" value="<?PHP echo $prenom ?>" placeholder="PRENOM">
											
										</div>

											<div class="card_number_grid_left">
												
													<label class="control-label">Numero de telephone:</label>
													<input class="billing-address-name form-control" type="number" name="tel" value="<?PHP echo $tel ?>" placeholder=" ">
												
											</div>
											<div class="card_number_grid_left">
												
													<label class="control-label">Email @:</label>
													<input class="billing-address-name form-control" type="email" name="mail" value="<?PHP echo $mail ?>" placeholder=" ">
												
											</div>







											<div class="card_number_grid_right">
												
													<label class="control-label">Adresse: </label>
													<input class="billing-address-name form-control" type="text" name="adresse" value="<?PHP echo $adresse ?>" placeholder="">



												
											</div>
											<div class="form-group">
									<label class="my-2">Ville value="<?PHP echo $ville ?> :</label>
								<select name="ville"  id="AddressForm">
								<option value="2">Ariana</option>
								<option value="3">Ben Arous</option>
								<option value="7">Bizerte</option>
								<option value="8">Béja</option>
								<option value="22">Gabes</option>
								<option value="19">Gafsa</option>
								<option value="9">Jendouba</option>
								<option value="12">Kairouan</option>
								<option value="13">Kasserine</option>
								<option value="21">Kebili</option>
								<option value="4">La Manouba</option>
								<option value="10">Le Kef</option>
								<option value="17">Mahdia</option>
								<option value="16">Monastir</option>
								<option value="23">Médenine</option>
								<option value="5">Nabeul</option>
								<option value="18">Sfax</option>
								<option value="14">Sidi Bouzid</option>
								<option value="11">Siliana</option>
								<option value="15">Sousse</option>
								<option value="24">Tataouine</option>
								<option value="20">Tozeur</option>
								<option value="1" selected="selected">Tunis</option>
								<option value="6">Zaghouan</option>
								</select> -->
	<input class="submit check_out" type="submit" name="modifier" value="modifier">	

<input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>">
										</div>
									</div>

							</section>
						</form>

					
						
					</div>
				</div>


	<!--
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>nb heures</td>
<td><input type="number" name="nbH" value="<?PHP echo $nbH ?>"></td>
</tr>
<tr>
<td>tarif horaire</td>
<td><input type="text" name="tarifH" value="<?PHP echo $tarifH ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
-->
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livraison=new livraison($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['nbH'],$_POST['tarifH']);
	$livraisonC->modifierLivraison($livraison,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherEmploye.php');
}
?>
</body>
</HTMl>