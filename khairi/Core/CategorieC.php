<?php
//include "../config.php";
include "../Entities/Categorie.php";

class CategorieC
{
	function ajouter($Categorie)
	{
		include "../config.php";
		$db = config::getConnexion();//config.php
		$sql="insert into categories (titre,description) values (:titre,:description)";
		
		try{
			$nom = $Categorie->get_nom();
			$description = $Categorie->get_description();
			
			$req = $db->prepare($sql);
			$req->bindValue(':titre',$nom);
			$req->bindValue(':description',$description);
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
		$sql="select * from categories";
		
		try{
			$tab = $db->query($sql);
			return $tab;
		}
		catch(Exeption $e)
		{
			echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
		}
	}
	
	function supprimer($colonne,$valeur)
	{
		include "../config.php";
		$db = config::getConnexion();//config.php
		$sql="delete from categories where(".$colonne."=".$valeur.")";
		
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
		include "../config.php";
		$db = config::getConnexion();//config.php
		$sql="select * from categories where(".$colonne."=".$valeur.")";
		
		try{
			$tab = $db->query($sql);
			return $tab;
		}
		catch(Exeption $e)
		{
			echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
		}
	}
	
	function modifier($Categorie)
	{
		include "../config.php";
		$db = config::getConnexion();//config.php
		$sql="update categories set titre = :titre ,description = :description where id_categorie = :id_categorie";
		
		try{
			$req = $db->prepare($sql);
			$req->bindParam(':titre', $Categorie->get_nom(), PDO::PARAM_STR);
			$req->bindParam(':description', $Categorie->get_description(), PDO::PARAM_STR); 
			$req->bindParam(':id_categorie', $Categorie->get_id_categorie(), PDO::PARAM_STR); 
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