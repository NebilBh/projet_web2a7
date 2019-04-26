<?php
include "../Core/CommandeCore.php";

	if((isset($_GET['recherche'])))
	{
		$id_produit = $_GET['recherche']; 
		
		$CommandeC = new CommandeCore();
		$tab = $CommandeC->chercher("id",$id_produit);
		//condition si vide 
		
		foreach($tab as $row)
		{
			$id = $row['id'];
			$user = $row['user'];
			$totale = $row['totale'];
		
		}
		include "produit_modifier.php";
	}
	else echo "erreur <br>";

?>