<?php include 'header.php'; ?>
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.php">Home</a>
							<i>|</i>
						</li>
						<li>Checkout </li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top $_SESSION["id_ligne_commande_selectionne"]-->
	<!--checkout-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 mt-3">Checkout </h3>
				<div class="checkout-right">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th width ="1%">Produit </th>
						 		<th width ="20%">Nom Produit </th>
						 		<th width ="10%">Prix</th>
						 		<th width ="10%">Quantité </th>
						 		<th width ="10%">Total </th>
						 		<th width ="10%">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							if (!empty($_SESSION["shopping_cart"]))
							{
				 				$total = 0;
			 					foreach ($_SESSION["shopping_cart"] as $keys => $values)
			 					{
			 						//print_r($_SESSION["shopping_cart"]);
			 				?>	
			 				<tr class="rem1">
								<td class="invert-image"> <img src="images/<?php echo $values['image'];?>" width="200" height="200" alt=""></td>
								<td align="middle"><a href="#"><?php echo $values['Marque'];?></a></td>
								<td align="middle" ><?php echo $values['prix'];?></td>
								<td align="middle"><?php echo   $values['quantity'];?></td>
								<td align="middle"><?php echo   number_format($values["quantity"]*$values["prix"],2);?></td>
								<td><a href="addcart.php?action=delete&pid=<?php echo $values["id_produit"]; ?>"><span onclick="return confirm('Are you sure to delete?');">Remove</span></a></td>
							</tr>
							<?php
									$total = $total + ($values["quantity"] * $values["prix"]);
								}
							}
							else $total = 0;
							?>
						</tbody>
					</table>
<?php 
if($_SESSION['connected']==false)
{
?>					
					<script>
						function myFunction() {
						 
						  alert("Veuillez vous connecter pour passer une commande...");

						}
					</script>


					<div class="checkout-left row">
						
						<div class="col-md-8 address_form">
							
							
							<div class="checkout-right-basket">
								<a href="index.php">Continue Shopping </a>
													<div class="clearfix"> </div>


							</div>
							<div class="checkout-right-basket">
								
						<div class="clearfix"> </div>

								<a href="" onclick="myFunction()" > Passer La commande 	</a>
													<div class="clearfix"> </div>

							</div>
						</div>
						

						<div class="clearfix"> </div>

					</div>
<?php 
}
else
{
?>
					<script>
						function myFunction() {
						  


						  alert("Commande En cours de transaction.....");
						}
					</script>

				
					
					<div class="col-md-8 address_form">
											<div class="clearfix"> </div>

						
						<div class="checkout-right-basket">
							<a href="index.php">Continue Shopping </a>
						</div>
					
					<div class="checkout-right-basket">
							<a href="pdf.php">Export Pdf Bill </a>
						</div>

					<div class="checkout-right-basket">
							<a href="ordre.php" >Order </a>
						</div> 
					</div>
<?php
}
?>
				</div>
				<div class="checkout-left row">
					
<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA   
<form method="POST" action="ajoutEmploye.php">
<table>
<caption>Ajouter Employe</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="cin"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom"></td>
</tr>
<tr>
<td>nb heures</td>
<td><input type="number" name="nbH"></td>
</tr>
<tr>
<td>tarif horaire</td>
<td><input type="text" name="tarifH"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>
</table>
</form>
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA   !-->

					<div class="col-md-8 address_form">
						<h4>LIVRAISON</h4>
							<form method="POST" action="ajoutLivraison.php">
                               <caption>Remplir les coordonees</caption>
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									
										<div class="card_number_grids">
											
											<label class="control-label">Nom du colis : </label>
											<input class="billing-address-name form-control" type="text" name="nom" placeholder="NOM">
											
										</div>

										<!--<div class="card_number_grids">
											
											<label class="control-label">Prenom: </label>
											<input class="billing-address-name form-control" type="text" name="prenom" placeholder="PRENOM">
											
										</div> !-->

											<div class="card_number_grid_left">
												
													<label class="control-label">Numero de telephone:</label>
													<input class="billing-address-name form-control" type="number" name="tel" placeholder=" ">
												
											</div>
											<div class="card_number_grid_left">
												
													<label class="control-label">Email @:</label>
													<input class="billing-address-name form-control" type="email" name="mail" placeholder=" "value="<?php echo $_SESSION['var']; ?>">
												
											</div>







											<div class="card_number_grid_right">
												
													<label class="control-label">Adresse: </label>
													<input class="billing-address-name form-control" type="text" name="adresse" placeholder="">



												
											</div>
											<div class="form-group">
									<label class="my-2">Ville    :</label>
								<select name="ville"  id="AddressForm">
								<option value="Ariana" >Ariana</option>
								<option value="Ben Arous">Ben Arous</option>
								<option value="Bizerte">Bizerte</option>
								<option value="Béja">Béja</option>
								<option value="Gabes">Gabes</option>
								<option value="Gafsa">Gafsa</option>
								<option value="Jendouba">Jendouba</option>
								<option value="Kairouan">Kairouan</option>
								<option value="Kasserine">Kasserine</option>
								<option value="Kebili">Kebili</option>
								<option value="La Manouba">La Manouba</option>
								<option value="Le Kef">Le Kef</option>
								<option value="Mahdia">Mahdia</option>
								<option value="Monastir">Monastir</option>
								<option value="Médenine">Médenine</option>
								<option value="Nabeul">Nabeul</option>
								<option value="Sfax">Sfax</option>
								<option value="Sidi Bouzid">Sidi Bouzid</option>
								<option value="Siliana">Siliana</option>
								<option value="Sousse">Sousse</option>
								<option value="Tataouine">Tataouine</option>
								<option value="Tozeur">Tozeur</option>
								<option value="Tunis" selected="selected">Tunis</option>
								<option value="Zaghouan">Zaghouan</option>
								</select> -->
	<input class="submit check_out" type="submit" name="ajouter" value="Envoyer">										</div>
									</div>

							</section>
						</form>
<td><a href="Livraison_modifier.php">
  Modifier</a></td>
  <td><a href="Livraison_supprimer.php">
  Supprimer</a></td>

					
						
					</div>
				</div>

					<div class="clearfix"> </div>

				</div>

			</div>

		</div>
	</section>
	<!--//checkout-->
	
	<!--jQuery-->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- newsletter modal -->
	<!--search jQuery-->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie-search.js"></script>
	<script src="js/demo1-search.js"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- easy-responsive-tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<!--close-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
	<!--//close-->

	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


	<script src="js/bootstrap.js"></script>
	<!-- js file -->
</body>


<?php include 'footer.php'; ?>