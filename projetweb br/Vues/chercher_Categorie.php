<?php
include "../Core/CategorieC.php";

	if((isset($_GET['recherche'])))
	{
		$id_Categorie = $_GET['recherche']; 
		
		$Categoriec = new CategorieC();
		$tab = $Categoriec->chercher("id_categorie",$id_Categorie);
		
		
		foreach($tab as $row)
		{
			$id_categorie = $row['id_categorie'];
			$titre = $row['titre'];
			$description = $row['description'];
		}
		include "categorie_modifier.php";
	}
	else echo "erreur <br>";

?>