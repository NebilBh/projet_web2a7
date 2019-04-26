<?php
include "../Core/CommandeCore.php";

	if((isset($_GET['id']))&&(isset($_GET['user']))&&(isset($_GET['totale'])))// iset pour verifier s'il existe le name 'nom' et 'prenom'$
		{
			$id = $_GET['id']; 
			$user = $_GET['user']; 
			$totale = $_GET['totale'];
			
			
			$p = new Commande($id,$user,$totale);
			$CommandeC = new CommandeCore();
			
			$mes = $CommandeC->modifier($p);
			
			
		}
		
		header('Location: produit_modifier.php');

		?>

