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
						<li>Contact Us</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!-- top Products -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Contact</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">Service apres vente</p>
				<div class="address row">

					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-map"></i>
						    </div>
							    <div class="col-md-9 address-right text-left">
								<h6>Adresse</h6>
								<p> La Marsa, TUN

								</p>
							    </div>
						</div>

					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Email</h6>
								<p>Email :
									<a href="mailto:example@email.com"> mail@example.com</a>

								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">

							<div class="col-md-3 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>

							<div class="col-md-9 address-right text-left">
								<h6>Téléphone</h6>
								<p>+216 123 456</p>
							</div>

						</div>
					</div>
				</div>
				

				<?PHP

				include_once "../entities/reclamation.php";
				include_once "../core/reclamationC.php";
				

				

				if (isset($_GET['mail']))
				{


					$reclam=new ReclamationC();
				    $result= $reclam->recupererReclamation("mail",$_GET['mail']);
					foreach($result as $row)
					{
						$mail=$row['mail'];
						$tel=$row['tel'];
						$categorie=$row['categorie'];
						$sujet=$row['sujet'];
						$message=$row['message'];
						$dater=$row['dater'];
				?>  

				 <div class="contact_grid_right">
					<!--  <form action="#" method="post"> -->
						<form method="GET">
							<input type ="hidden" name = "mail" value ="<?php echo $mail ?>" >

						 <div class="row contact_left_grid">
							<div class="col-md-6 con-left">
								<div class="form-group">
									<label>Numéro de téléphone</label>
									<input class="form-control" type="number-phone" name="tel" placeholder="" required="" value ="<?php echo $tel?>">
								</div>
								
<div class="form-group">
								<label class="my-2">Categorie   :</label>
								<select name="categorie"  id="AddressForm" value="<?php echo $categorie?>">
								<option value="Reparation" >Reparation</option>
								<option value="Rendre le produit">Rendre le produit</option>

								</select>
							</div>



								<div class="form-group">
									<label>Sujet</label>
									<input class="form-control" type="text" name="sujet" placeholder="" required="required" value ="<?php echo $sujet?>">
								</div>
							</div>

							<div class="col-md-6 con-right">
								<div class="form-group">
									<label>Message</label>
										<input class="form-control" type="text" name="message" placeholder="" required="required" value ="<?php echo $message ?>">
								</div>
								<div class="form-group">
									<label>Date</label>
										<input class="form-control" type="date" name="dater" placeholder="" required="required" value ="<?php echo $dater ?>">
								</div>
								<input class="form-control" type="submit" name="modifier" value="modifier">

							</div> 
						
                             </div>

			     </form>

		    </div>
	      </div>


		</div>
	</section>

	<div class="contact-map">

		<iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=5%20RUe%20de%20la%20mecque%2C%20la%20marsa+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"

		
		    class="map" style="border:0" allowfullscreen=""></iframe>
	</div>




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

								
				

<?PHP
	}	
}
	if (isset($_GET['modifier']))
	{

		$recl=new Reclamation($_GET['mail'],$_GET['tel'],$_GET['categorie'],$_GET['sujet'],$_GET['message'],$_GET['dater']);
		$reclamationC = new ReclamationC();
		
		if($reclamationC->modifierReclamation($recl));
		{
			GoToNow('index.html');

		}
	
		
	}

function GoToNow ($url){
    echo '<script language="javascript">window.location.href ="'.$url.'"</script>';
}
?>
<?php include'footer.php'; ?>