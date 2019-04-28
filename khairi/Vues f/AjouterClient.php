<?php
include "../config.php";include "../Core/Clientc.php";

if(isset($_GET['name']) && isset($_GET['lastname']) && isset($_GET['email']) && isset($_GET['confirm_email']) && isset($_GET['date']) && isset($_GET['password']) && isset($_GET['password2']) && isset($_GET['phone']))
{
	$firstname = $_GET['name'];
	$lastname=$_GET['lastname'];
	$email=$_GET['email'];
	$dateof=$_GET['date'];
	$password=$_GET['password'];
	$telephone=$_GET['phone'];
	
	if(!empty($_GET['name']) && !empty($_GET['lastname']) && !empty($_GET['email']) && !empty($_GET['confirm_email']) && !empty($_GET['date']) && !empty($_GET['password']) && !empty($_GET['password2']) && !empty($_GET['phone']))
	{
		$client = new Client($firstname,$lastname,$email,$dateof,$password,$telephone);
		$clientC = new ClientC();
		
		$mes=$clientC->ajouter($client);

		$con = new mysqli("localhost","root","","projetweb2a7final");
		// Check connection
		if ($con->connect_error) 
		{
		    die("Connection failed: " . $con->connect_error);
		}

		$sql = "SELECT CardID FROM client WHERE Email='$email'";
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

		$carte = new Carte($id,0);
		$carteC = new CarteC();

		if ($mes)
		{
			$mesa=$carteC->ajouterCarte($carte);
			header("Location: index.php");
			exit;
		}
		else
		{
			?>
			<script type="text/javascript">
			alert("L'adresse e-mail existe déjà");
			window.history.back();
			</script>
			<?php
		}
	}
} ?>
