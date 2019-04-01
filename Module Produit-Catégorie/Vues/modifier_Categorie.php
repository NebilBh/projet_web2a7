<?php
include "../Core/CategorieC.php";

	if((isset($_GET['titre_categorie']))&&(isset($_GET['description_categorie'])) )
		{
			$id_Categorie = $_GET['id_Categorie']; 
			$titre_categorie = $_GET['titre_categorie']; 
			$description_categorie = $_GET['description_categorie']; 
			$p = new Categorie($id_Categorie, $titre_categorie , $description_categorie);
			$Categoriec = new CategorieC();
			
			$mes = $Categoriec->modifier($p);
			
			echo 'resultat' .$mes;
			if($mes==true)
			{
				header('Location: categorie_chercher.php');
				echo "modifier avec succes";
			}
			else 
			{
				echo "erreur";
			}
		}
	else echo "erreur <br>";
		

?>