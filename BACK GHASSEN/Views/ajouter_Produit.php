<?php
include('../Core/livreurCore.php');

	if((isset($_POST['nom_livreur']))&&(isset($_POST['prenom_livreur']))
		&&(isset($_POST['date_naissance']))&&(isset($_POST['zone_travail']))
	&&(isset($_POST['disponibilite']))
	)// iset pour verifier s'il existe le name 'nom' et 'prenom'$
	{
		
		$id_livreur = null;
		$nom_livreur = $_POST['nom_livreur']; 
		$prenom_livreur = $_POST['prenom_livreur'];
		$date_naissance = $_POST['date_naissance'];
		$date_naissance = date("Y-m-d H:i:s");
		$zone_travail = $_POST['zone_travail'];	
		$disponibilite = $_POST['disponibilite'];
		
		
		
		
		$p = new livreur($id_livreur,$nom_livreur,$prenom_livreur,$date_naissance,$zone_travail,$disponibilite);
		$livreurC = new livreurC();
		$mes = $livreurC->ajouter($p);
		
	}
	
	header('Location: produit_ajouter.html');


?>