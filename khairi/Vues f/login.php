<?php
include "../config.php";include "../Core/Clientc.php";

if(isset($_GET['emaillogin']) && isset($_GET['passwordlogin']))
{
	$emaillogin = $_GET['emaillogin'];
	$passwordlogin=$_GET['passwordlogin'];

	if(!empty($_GET['emaillogin']) && !empty($_GET['passwordlogin']))
	{
		$clientC = new ClientC();

		$mes = $clientC->chercherlogin($emaillogin,$passwordlogin);

		if ($mes)
		{
			header("Location: index.php?email=" .$emaillogin);
			exit;
		}
		else
		{
			?>
			<script type="text/javascript">
			alert("Adresse e-mail ou mot de passe invalide");
			window.history.back();
			</script>
			<?php
		}
	}
}
?>