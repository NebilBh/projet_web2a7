<?php
include "../Core/livreurCore.php";

	if((isset($_GET['recherche'])))
	{
		$id_livreur = $_GET['recherche']; 
		
		$livreurc = new livreurc();
		$tab = $livreurc->chercher("id_livreur",$id_livreur);
		//condition si vide 
		
		foreach($tab as $row)
		{
			$id_livreur = $row['id_livreur'];
			$nom_livreur = $row['nom_livreur'];
			$prenom_livreur = $row['prenom_livreur'];
					$date_naissance = $row['date_naissance'];
			$zone_travail = $row['zone_travail'];
			$disponibilite = $row['disponibilite'];

		}
		include "livreur_modifier.php";
	}
	else echo "erreur <br>";

?>