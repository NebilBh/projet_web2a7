<?php include 'header.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	    <script type='text/javascript' src='https://appstatic.jeeliz.com/jeewidget/JeelizNNCwidget.js'></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='text/javascript'>
    	// function which are used only for this functionnal test
     

      // main function, launched with body.onload()
      function main() {
        JEEWIDGET.start({
          sku: 'rayban_aviator_or_vertFlash',
          searchImageMask: 'https://appstatic.jeeliz.com/jeewidget/images/target.png',
          searchImageColor: 0xff0000,
          onError: function(errorLabel){ // this function catches errors, so you can display custom integrated messages
            alert('An error happened. errorLabel =' + errorLabel)
            switch(errorLabel) {
              case 'NOFILE':
                // the user send an image, but it is not here
                break

              case 'WRONGFILEFORMAT':
                // the user upload a file which is not an image or corrupted
                break

              case 'INVALIDSKU':
                // the provided SKU does not match with a glasses model
                break

              case 'FALLBACKUNAVAILABLE':
                // we cannot switch to file upload mode. browser too old ?
                break

              case 'FATAL':
              default:
                // a bit error happens :(
                break
            } // end switch
          } // end onError()
        }) // end JEEWIDGET.start call
      } // end main()
    </script>
<link rel='stylesheet' href='css/JeeWidgetPublicGitBasic.css' />
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!--/404-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">


	<main>
      <!-- BEGIN JEEWIDGET -->
      			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Try Glasses On !</h3>
<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">We love to make our customers happy</p>

				<div  id='JeeWidgetChangeModelContainer' >
       
			<h3 align="left"> Choose a Model</h3>
					
          <button  class="btn btn-primary submit mb-4"  onclick="JEEWIDGET.load('rayban_aviator_or_vertFlash')">RayBan Aviator</button>
          <button  class="btn btn-primary submit mb-4"  onclick="JEEWIDGET.load('rayban_round_cuivre_pinkBrownDegrade')">Vakay</button>
          <button  class="btn btn-primary submit mb-4"  onclick="JEEWIDGET.load('rayban_wayfarer_denimNoir_bleuMirroir')">Persol</button>        
        </div>

      <div id='JeeWidget' >
        <!-- MAIN CANVAS : --><canvas id='JeeWidgetCanvas'></canvas>

        <!-- BEGIN UPLOAD PICTURE BUTTON -->
          <div class='JeeWidgetHiddenFileInput'>
             <input type='file' id='JeeWidgetFileInput' />
          </div>

          <button id='JeeWidgetFileInputButton'><div class="buttonIcon"><i class="far fa-image"></i></div>Try on a picture</button>
        <!-- END UPLOAD PICTURE BUTTON -->
        <!-- BACK TO REALTIME VIDEO BUTTON : --><button id='JeeWidgetBackToRealtimeButton'>Back to video</button>
        <!-- ADJUST BUTTON : -->
        
        
        
        <!-- BEGIN ADJUST NOTICE -->
        <div id='JeeWidgetAdjustNotice'>
          You can move the glasses yeah !
          <button class='JeeWidgetBottomButton' id='JeeWidgetAdjustExit'>Quit</button>
        </div>
        <!-- END AJUST NOTICE -->

        <!-- BEGIN LOADING -->
        <div id='JeeWidgetLoading'>
           <div class='JeeWidgetLoadingWheel'>
              <svg viewBox='0 0 32 32' width='32' height='32'>
                <circle id='spinner' cx='16' cy='16' r='14' fill='none' />
              </svg>
            </div>
        </div>
        <!-- END LOADING -->
        <!-- BEGIN FALLBACK (upload picture) NOTICE -->
        <!--div id='JeeWidgetUploadNotice'>
          Please upload a picture to tryon your glasses
          <div class='JeeWidgetHiddenFileInput'>
             <input type='file' id='JeeWidgetFileInputNotice' />
          </div>
          <button id='JeeWidgetFileInputButtonNotice'>Choose image from file</button>
        </div-->
        <!-- END FALLBACK (upload picture) NOTICE -->



      </div>
      <!-- END JEEWIDGET -->    
    </main>
</div>
    </section>




	<!--//404-->
	<!--footer -->
	<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p>Curabitur non nulla sit amet nislempusinit t convallis quis ac lectus. lac inia eget consectetur sed, convallis at
							tellus. Nulla porttitor accumsana tincidunt.</p>
						<ul class="footer-social text-left mt-lg-4 mt-3">

							<li class="mx-2">
								<a href="#">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-google-plus-g"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-linkedin-in"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fas fa-rss"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-vk"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Get in touch</h3>
					</div>
					<div class="contact-info">
						<h4>Location :</h4>
						<p>0926k 4th block building, king Avenue, New York City.</p>
						<div class="phone">
							<h4>Contact :</h4>
							<p>Phone : +121 098 8907 9987</p>
							<p>Email :
								<a href="mailto:info@example.com">info@example.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Quick Links</h3>
					</div>
					<ul class="links">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="about.html">About</a>
						</li>
						<li>
							<a href="404.html">Error</a>
						</li>
						<li>
							<a href="shop.html">Shop</a>
						</li>
						<li>
							<a href="contact.html">Contact Us</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Sign up for your offers</h3>
					</div>
					<div class="footer-text">
						<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
						<form action="#" method="post">
							<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
							<button class="btn1">
								<i class="far fa-envelope" aria-hidden="true"></i>
							</button>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
			</div>
			<div class="copyright-w3layouts mt-4">
				<p class="copy-right text-center ">&copy; 2018 Goggles. All Rights Reserved | Design by
					<a href="http://w3layouts.com/"> W3layouts </a>
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->

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
</body>

</html>