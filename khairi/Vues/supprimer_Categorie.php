<?php
include "../Core/CategorieC.php";

	if((isset($_GET['recherche'])))
	{
		$recherche = $_GET['recherche']; 
		
		$Categoriec = new CategorieC();
		$mes = $Categoriec->supprimer("id_categorie",$recherche);
		echo 'resultat' .$mes;
		if($mes==true)
		{
			echo "supprimer avec succes";
			$email ="smart.phoropter@gmail.com";
			$to      = 'nadhir_bouhaouala@live.fr';
			$subject = 'the subject';
			$message = 'hello Categorie supprimer mr nadhir ';
			$headers = 'From: ' .$email . "\r\n". 
						'Reply-To: ' . $email. "\r\n" . 
						'X-Mailer: PHP/' . phpversion();
			//$result = mail($to, $subject, $message);
			$result = mail($to, $subject, $message, $headers);
			if($result) echo "email envoyé";
			else "error email";
			header('Location: categorie_supprimer.html');
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