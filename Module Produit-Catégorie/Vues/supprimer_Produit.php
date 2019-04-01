<?php
include "../Core/ProduitC.php";

	if((isset($_GET['recherche'])))
	{
		$recherche = $_GET['recherche']; 
		
		$Produitc = new ProduitC();
		$mes = $Produitc->supprimer("id_produit",$recherche);
		echo 'resultat' .$mes;
		if($mes==true)
		{
			echo "supprimer avec succes";
			$email ="smart.phoropter@gmail.com";
			$to      = 'nadhir_bouhaouala@live.fr';
			$subject = 'the subject';
			$message = 'hello produit supprimer mr nadhir ';
			$headers = 'From: ' .$email . "\r\n". 
						'Reply-To: ' . $email. "\r\n" . 
						'X-Mailer: PHP/' . phpversion();
			//$result = mail($to, $subject, $message);
			$result = mail($to, $subject, $message, $headers);
			header('Location: produit_supprimer.html');
			if($result) echo "email envoyé";
			else "error email";
		}
		else 
		{
			echo "erreur";
		}
	}
	else echo "erreur <br>";

?>

<script>
	function onchange()
	{
		<?php 
			echo "changement<br>";
		?>
	}
</script>