<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at
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
				<div class="footer-title">
						
					<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Nos sponsors </h3>
					</div>
				
				</div>

					</div>	<?PHP
                                            foreach($result as $row){
                                        ?>
				<p class="copy-right text-center ">  <img src="<?php echo '../Vues/images/sponsor/'.$row['image']; ?> " alt="" class="img-fluid" height="50" width="50" />
				</p>
						  <?PHP
            }
                ?>
			</div>
			

			
		</div>
		
	</footer>
		<!-- //footer -->
	<script type="text/javascript">
			function formulaire()
{
  window.location.assign("formulaire.php");
}
</script>	

<?php 
if($_SESSION['cardd']==true)
{
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5 mx-auto mw-100">
					<h6>Loyalty Card</h6>
					<div class="login newsletter">
						<table id="datatable" class="table table-striped table-bordered">
			                <tr>
			                    <td class="firstline">ID de la carte</td>
			                    <td class="firstline">Points</td>
			                    <td class="firstline">Date de fabrication</td>
			                </tr>

						      <?php
			              include "../Core/Clientc.php";
			   
			              $emailhistory = $_SESSION['var'];
			          

			              $con = new mysqli("localhost","root","","projetweb2a7final");
							// Check connection
							if ($con->connect_error) 
							{
							    die("Connection failed: " . $con->connect_error);
							}

							$sql = "SELECT CardID FROM client WHERE Email='$emailhistory'";
							$result = $con->query($sql);

							if ($result->num_rows > 0) 
							{
							    // output data of each row
							    while($row = $result->fetch_assoc()) 
							    {
							        $id = $row["CardID"];
							    }
							} 
							else 
							{
							    echo "0 results";
							}
							$con->close();

						  $carteC = new CarteC();
						  $temp = $carteC->afficherCarteClient($id);
			              while($row = $temp->fetch_assoc()) 
						    {
						        ?>
			                  <tr>
			                    <td><?php echo $row['CardID'];?></td>
			                    <td><?php echo $row['Points'];?></td>
			                    <td><?php echo $row['FabricationDate'];?></td>
			                  </tr>
			              <?php
			              } 
			              ?>
			             </table>

					</div>
				</div>

			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$("#myModal").modal();
		});
	</script>
<?php
}
$_SESSION['cardd']=false;
?>

		<script src="js/bootstrap.js"></script>
		<!-- js file -->
</body>

</html>