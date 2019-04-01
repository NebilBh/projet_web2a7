<?php
include "../Core/ProduitC.php";

	$xx='fff';
	if((isset($_GET['recherche'])))
	{
		$recherche = $_GET['recherche']; 
		
		$Produitc = new ProduitC();
		$tab = $Produitc->chercher("id_produit",$recherche);
		echo "<script>";
		foreach($tab as $row)
		{
			echo $row['prix'];
			//echo "document.getElementsByName(\"prix\")[0].value = \"dd\";";	
		}
		echo "</script>";
	}
	else echo "erreur <br>";

?>