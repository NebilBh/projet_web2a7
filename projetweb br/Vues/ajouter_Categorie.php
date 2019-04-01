<?php
include('../Core/CategorieC.php');

	if( 	(isset($_GET['titre_categorie']))&&(isset($_GET['description_categorie']))	 )
	{

		$id_categorie = null;
		$nom = $_GET['titre_categorie']; 
		$description = $_GET['description_categorie'];

		
			$p = new Categorie($id_categorie, $nom , $description);
			$Categoriec = new CategorieC();
			$mes = $Categoriec->ajouter($p);
			echo 'resultat' .$mes;
			if($mes==true)
			{
				header('Location: categorie_ajouter.html');
				echo "ajout avec succes";
			}
			else 
			{
				echo "erreur";
			}

		
	}
	else echo "erreur <br>";

?>