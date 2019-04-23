<?php
include "../Core/ProduitC.php";

	if((isset($_GET['recherche'])))
	{
		$id_produit = $_GET['recherche']; 
		
		$Produitc = new ProduitC();
		$tab = $Produitc->chercher("id_produit",$id_produit);
		//condition si vide 
		
		foreach($tab as $row)
		{
			$prix = $row['prix'];
			$caracteristiques = $row['caracteristiques'];
			$prix = $row['prix'];
			$marque = $row['Marque'];
			$date_expiration = $row['date_expiration'];
			$image = $row['image'];
			$sexe = $row['sexe'];
			$forme = $row['forme'];
			$note = $row['note'];
			$id_categorie = $row['id_categorie'];
			$date_creation = $row['date_creation'];
			$date_vente = $row['date_vente'];
		}
		include "produit_modifier.php";
	}
	else echo "erreur <br>";

?>