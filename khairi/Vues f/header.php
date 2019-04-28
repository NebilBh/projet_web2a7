<?php
	session_start();
	if(!isset($_SESSION['connected']))$_SESSION['connected']=false;
	if(!$_SESSION['connected'])$_SESSION['connected']=false;

	if (strpos($_SERVER['REQUEST_URI'], "email=") != false) 
	{
		$emaillogin = $_SERVER['REQUEST_URI'];
		$pos = strpos($emaillogin, "email=");
		$emaillogin = substr($emaillogin, $pos+6);
		$_SESSION['var'] = $emaillogin;	
  		include "../Core/Clientc.php";
  
        $clientC1 = new ClientC();
		$data1 = $clientC1->get_nomprenom($emaillogin);
              
	    foreach ($data1 as $row) 
	    {
	    	$_SESSION['r'] = $row['LastName'];
	    }
			
		$_SESSION['connected'] = true;
	}

	if(isset($_POST['logout']))
	{
		$_SESSION['connected']=false;
		session_unset ();
		session_destroy ();

		header('Location: index.php');
	}

	if(isset($_POST['loyalty']))
	{

		$_SESSION['cardd']=true;
	}

	include "../Core/photoCore.php";
	$connect = mysqli_connect("localhost", "root", "", "projetweb2a7final");
	$photoCore1C= new PhotoCore();
	$result=$photoCore1C->afficherphoto2($connect);
	$pub=$photoCore1C->afficherphoto($connect);
	
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Opticien Afric Optic : lunettes de vue, lunettes de solei, lentilles de contact</title>
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
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/boutonicone.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Need Help</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Call</li>
						<li class="number-phone mt-3">71740358</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.php">
							Afric Optic </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<li class="button-log">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>

						<a href="checkout.php" title="CHECKOUT" rel="nofollow">
                			<button class="top_googles_cart" type="submit" name="submit" value="">
								<i class="fas fa-cart-arrow-down"></i>My Cart</button>
<?php     
$sum=0;
$qty=0;
if (!empty($_SESSION["shopping_cart"])) 
{  
	foreach ($_SESSION["shopping_cart"] as $keys => $values)
	{
        $sum = $sum + number_format($values["quantity"]*$values["prix"],4);
        $qty= $qty+ $values['quantity'];                                                        } 
?>
<button class="top_googles_cart" type="submit" name="submit" value="">
									
								
                       <?php echo ($sum."$"); 
                              echo ("|Qty:".$qty) ?>
                   </button>



<?php


                                } else {
                                    echo 'Empty Please Shop!';
                                    
                                }
                                
                                 ?>
                </span>
              </a>
					</ul>
					<!---->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>

						<div class="wrap">
							<?php if($_SESSION['connected'] == false) 
							{ ?>
							 <h5 class="text-center mb-4">Login Now</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="login.php" method="GET">
									<div class="form-group">
										<label class="mb-2">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" name="emaillogin" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" name="passwordlogin" placeholder="" required="">
									</div>
									
									<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
									<button type="button" class="btn btn-primary submit mb-4" onclick="formulaire()">Register</button>

								</form>
							</div>
							<?php 
							}
							 else
							 {
							 ?>
							 <h5 class="text-center mb-4">Account Settings</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form method="GET" action="modifierclient.php">
									<div class="form-group">
										<label class="mb-2">New email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" name="emaillogin" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">New password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" name="passwordlogin" placeholder="" required="">
									</div>
									
									<button type="submit" class="btn btn-primary submit mb-4" id="edit"> Edit</button>
									
								</form>
								<form action="" method="POST"><button type="submit" name="loyalty" class="btn btn-primary submit mb-4" id="monBtn"><img src="images/history.png" alt="icone" style="position:relative; z-index:20; margin:0px;" /><span style="margin-left:10px;">Loyalty Card</span></button></form>
								<form action="" method="POST">
									<button type="submit" class="btn btn-primary submit mb-4" id ="delete" name="logout"> Log out</button>
								</form>
								<form action="" method="POST"><button type="submit" name="reclama" class="btn btn-primary submit mb-4" id="monBtn"><span style="margin-left:10px;"><a href="voirReclamation.php">Voir mes Reclamations</span></button></form>
									<form action="" method="POST"><button type="submit" name="reclama" class="btn btn-primary submit mb-4" id="monBtn"><span style="margin-left:10px;"><a href="voirLivraison.php">Voir mes Livraisons</span></button></form>
							</div>
							 <?php
							 }
							 ?>


						</div>
					</div>
					<!---->
				</div>
			</div>
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form action="#" method="post" class="d-flex">
						<input class="form-control" type="search" placeholder="Search here..." required="">
						<button type="submit" class="btn btn-primary submit">
							<i class="fas fa-search"></i>
						</button>
					</form>

				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item">
							<a class="nav-link ml-lg-0" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ml-lg-0" href="try.php">Try on Glasses
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Features
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="shop.php">Designer Glasses</a>
												</li>
												<li class="">
													<a href="shop.php"> Ray-Ban</a>
												</li>
												<li>
													<a href="shop.php">Prescription Glasses</a>
												</li>
												<li class="mt-3">
													<h5>View more pages</h5>
												</li>
												<li class="mt-2">
													<a href="about.php">About</a>
												</li>
												<li>
													<a href="customer.php">Customers</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.php">
													<img src="images/g2.jpg" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub">Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.php">
													<img src="images/g3.jpg" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Shop
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="shop.php">Designer Glasses</a>
												</li>
												<li class="">
													<a href="shop.php"> Ray-Ban</a>
												</li>
												<li>
													<a href="shop.php">Prescription Glasses</a>
												</li>
												<li>
													<a href="shop.php">Rx Sunglasses</a>
												</li>
												<li>
													<a href="shop.php">Contact Lenses</a>
												</li>
												<li>
													<a href="shop.php">Multifocal Glasses</a>
												</li>
												<li>
													<a href="shop.php">Kids Glasses</a>
												</li>
												<li>
													<a href="shop.php">Lightweight Glasses</a>
												</li>
												<li>
													<a href="shop.php">Sports Glasses</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<ul>
												<li class="media-mini mt-3">

													<a href="shop.php">Brooks Brothers</a>
												</li>
												<li>
													<a href="shop.php">Persol</a>
												</li>
												<li>
													<a href="shop.php">Polo Ralph Lauren</a>
												</li>
												<li>
													<a href="shop.php">Prada</a>
												</li>
												<li>
													<a href="shop.php">Ray-Ban Jr</a>
												</li>
												<li>
													<a href="shop.php">Sferoflex</a>
												</li>
											</ul>
											<ul class="sub-in text-left">

												<li>
													<a href="shop.php">Polo Ralph Lauren</a>
												</li>
												<li>
													<a href="shop.php">Prada</a>
												</li>
												<li>
													<a href="shop.php">Ray-Ban Jr</a>
												</li>
											</ul>

										</div>
										<div class="col-md-4 media-list span4 text-left">

											<h5 class="tittle-w3layouts-sub-nav">Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.php">
													<img src="images/g1.jpg" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>


						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Reclamation
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Reclamation </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="Reclamation_envoyer.php">Envoyer une reclamation</a>
												</li>
												<li class="">
													<a href="Reclamation_modifier.php"> Modifier reclamation</a>
												</li>
												<li>
													<a href="Reclamation_supprimer.php">Supprimer reclamation</a>
												</li>
												
																						</ul>

							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>

					</ul>

				</div>
			</nav>
		</header>
    </div>
