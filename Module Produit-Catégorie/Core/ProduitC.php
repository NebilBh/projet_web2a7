<?php
include "../config.php";
include "../Entities/Produit.php";

class ProduitC
{
	function ajouter($Produit)
	{
		$db = config::getConnexion();//config.php
		$sql="insert into produits (prix,caracteristiques,marque,date_creation,date_expiration,sexe,forme,note,id_categorie,image,date_vente) values (:prix,:caracteristiques,:marque,:date_creation,:date_expiration,:sexe,:forme,:note,:id_categorie,:image,:date_vente)";
		
		try{
			//$id_produit = $Produit->get_id_produit();
			$prix = $Produit->get_prix();
			$caracteristiques = $Produit->get_caracteristiques();
			$marque = $Produit->get_marque();
			$date_creation = $Produit->get_date_creation();
			$date_expiration = $Produit->get_date_expiration();
			$sexe = $Produit->get_sexe();
			$forme = $Produit->get_forme();
			$note = $Produit->get_note();
			$id_categorie = $Produit->get_id_categorie();
			$image = $Produit->get_image();
			$date_vente = $Produit->get_date_vente();
			
			$req = $db->prepare($sql);
			//$req->bindValue(':id_produit',$id_produit);
			$req->bindValue(':prix',$prix);
			$req->bindValue(':caracteristiques',$caracteristiques);
			$req->bindValue(':marque',$marque);
			$req->bindValue(':date_creation',$date_creation);
			$req->bindValue(':date_expiration',$date_expiration);
			$req->bindValue(':sexe',$sexe);
			$req->bindValue(':forme',$forme);
			$req->bindValue(':note',$note);
			$req->bindValue(':id_categorie',$id_categorie);
			$req->bindValue(':image',$image);
			$req->bindValue(':date_vente',$date_vente);
			$req->execute();
			return true;
		}
		catch(Exeption $e)
		{
			echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
			return false;
		}
	
	}
	
	function afficher()
	{
		$db = config::getConnexion();//config.php
		$sql="select * from Produits";
		
		try{
			$tab = $db->query($sql);
			return $tab;
		}
		catch(Exeption $e)
		{
			echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
		}
	}
	
	function chercher_stat($colonne,$valeur)
	{
		$db = config::getConnexion();//config.php
		$sql="select * from Produits where(".$colonne."=".$valeur.")";
		
		try{
			$tab = $db->query($sql);
			$longeur = 0;
			foreach($tab as $row)$longeur++;
			return $longeur;
		}
		catch(Exeption $e)
		{
			echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
		}
	}
	
	function supprimer($colonne,$valeur)
	{
		$db = config::getConnexion();//config.php
		$sql="delete from Produits where(".$colonne."=".$valeur.")";
		
		try{
			
			$req = $db->prepare($sql);
			$req->execute();
			return true;
		}
		catch(Exeption $e)
		{
			echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
			return false;
		}
	}

	function chercher($colonne,$valeur)
	{
		$db = config::getConnexion();//config.php
		$sql="select * from Produits where(".$colonne."=".$valeur.")";
		
		try{
			$tab = $db->query($sql);
			return $tab;
		}
		catch(Exeption $e)
		{
			echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
		}
	}
	
	function modifier($Produit)
	{
		$db = config::getConnexion();//config.php
		$sql="update Produits set prix = :prix ,caracteristiques = :caracteristiques ,Marque = :marque ,date_expiration=".
		":date_expiration ,forme = :forme ,note = :note ,id_categorie= :id_categorie ,image = :image where id_produit = :id_produit";
		
		try{
			$req = $db->prepare($sql);
			$req->bindParam(':prix', $Produit->get_prix(), PDO::PARAM_STR);
			$req->bindParam(':caracteristiques', $Produit->get_caracteristiques(), PDO::PARAM_STR); 
			$req->bindParam(':marque', $Produit->get_marque(), PDO::PARAM_STR); 
			$req->bindParam(':date_expiration', $Produit->get_date_expiration(), PDO::PARAM_STR); 
			$req->bindParam(':forme', $Produit->get_forme(), PDO::PARAM_STR); 
			$req->bindParam(':note', $Produit->get_note(), PDO::PARAM_STR); 
			$req->bindParam(':id_categorie', $Produit->get_id_categorie(), PDO::PARAM_STR); 
			$req->bindParam(':image', $Produit->get_image(), PDO::PARAM_STR); 
			$req->bindParam(':id_produit', $Produit->get_id_produit(), PDO::PARAM_STR); 
			$req->execute();

			return true;
		}
		catch(Exeption $e)
		{
			echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
		}
	}
	
	function exporter($tab)
	{
		
	}
	
	
}
	
?>