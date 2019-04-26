<?php
include "../Core/livreurCore.php";

	if((isset($_GET['id_livreur']))&&(isset($_GET['nom_livreur']))&&(isset($_GET['prenom_livreur']))&&(isset($_GET['date_naissance']))&&(isset($_GET['zone_travail']))&&(isset($_GET['disponibilite'])))// iset pour verifier s'il existe le name 'nom' et 'prenom'$
		{
			

			$id_livreur = $_GET['id_livreur'];
			$nom_livreur = $_GET['nom_livreur'];
			$prenom_livreur = $_GET['prenom_livreur'];
					$date_naissance = $_GET['date_naissance'];
			$zone = $_GET['zone_travail'];
			$disponibilite = $_GET['disponibilite'];
			
			
			$p = new livreur($id_livreur,$nom_livreur,$prenom_livreur,$date_naissance,$zone,$disponibilite);
			$livreurC = new livreurC();
			
			$mes = $livreurC->modifier($p);
			
			
		}
		
		header('Location: livreur_modifier.php');

		?>

