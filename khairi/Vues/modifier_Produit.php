<?php
include "../Core/ProduitC.php";

	if((isset($_GET['prix']))&&(isset($_GET['caracteristiques']))
		&&(isset($_GET['marque']))&&(isset($_GET['date_expiration']))
		&&(isset($_GET['sexe']))&&(isset($_GET['forme']))
		&&(isset($_GET['note']))&&(isset($_GET['id_categorie']))&&(isset($_GET['image'])))// iset pour verifier s'il existe le name 'nom' et 'prenom'$
		{
			$id_produit = $_GET['id_produit']; 
			$prix = $_GET['prix']; 
			$caracteristiques = $_GET['caracteristiques'];
			$marque = $_GET['marque'];
			$date_expiration  = $_GET['date_expiration'];
			$sexe = $_GET['sexe'];	
			$forme = $_GET['forme'];
			$note = $_GET['note'];
			$id_categorie = $_GET['id_categorie'];
			$image = $_GET['image'];
			$date_creation  = $_GET['date_creation'];
			$date_vente  = $_GET['date_vente'];
			$p = new Produit($id_produit, $prix , $caracteristiques ,$marque ,$date_creation , $date_expiration , $sexe , $forme , $note , $id_categorie ,$image , $date_vente);
			$Produitc = new ProduitC();
			
			$mes = $Produitc->modifier($p);
			
			echo 'resultat' .$mes;
			if($mes==true)
			{
				header('Location: produit_chercher.php');
				echo "ajout avec succes";
			}
			else 
			{
				echo "erreur";
			}
		}
	else echo "erreur <br>";
		

?>