<?php
include "../config.php";
include "../Entities/Garantie.php";

class GarantieC
{
	function ajouter($Garantie)
	{
		$db = config::getConnexion();//config.php
		$sql="insert into Garantie (prix,caracteristiques,marque,date_creation,date_expiration,sexe,forme,note,id_categorie,image,date_vente) values (:prix,:caracteristiques,:marque,:date_creation,:date_expiration,:sexe,:forme,:note,:id_categorie,:image,:date_vente)";
		
		try{
			//$id_Garantie = $Garantie->get_id_Garantie();
			$prix = $Garantie->get_prix();
			$caracteristiques = $Garantie->get_caracteristiques();
			$marque = $Garantie->get_marque();
			$date_creation = $Garantie->get_date_creation();
			$date_expiration = $Garantie->get_date_expiration();
			$sexe = $Garantie->get_sexe();
			$forme = $Garantie->get_forme();
			$note = $Garantie->get_note();
			$id_categorie = $Garantie->get_id_categorie();
			$image = $Garantie->get_image();
			$date_vente = $Garantie->get_date_vente();
			
			$req = $db->prepare($sql);
			//$req->bindValue(':id_Garantie',$id_Garantie);
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
		$sql="select * from Garantie";
		
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
		$db = config::getConnexion();//config.php
		$sql="delete from Garanties where(".$colonne."=".$valeur.")";
		
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
		$sql="select * from Garantie where(".$colonne."=".$valeur.")";
		
		try{
			$tab = $db->query($sql);
			return $tab;
		}
		catch(Exeption $e)
		{
			echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
		}
	}
	
	function modifier($Garantie)
	{
		$db = config::getConnexion();//config.php
		$sql="update Garantie set prix = :prix ,caracteristiques = :caracteristiques ,Marque = :marque ,date_expiration=".
		":date_expiration ,forme = :forme ,note = :note ,id_categorie= :id_categorie ,image = :image where id_Garantie = :id_Garantie";
		
		try{
			$req = $db->prepare($sql);
			$req->bindParam(':prix', $Garantie->get_prix(), PDO::PARAM_STR);
			$req->bindParam(':caracteristiques', $Garantie->get_caracteristiques(), PDO::PARAM_STR); 
			$req->bindParam(':marque', $Garantie->get_marque(), PDO::PARAM_STR); 
			$req->bindParam(':date_expiration', $Garantie->get_date_expiration(), PDO::PARAM_STR); 
			$req->bindParam(':forme', $Garantie->get_forme(), PDO::PARAM_STR); 
			$req->bindParam(':note', $Garantie->get_note(), PDO::PARAM_STR); 
			$req->bindParam(':id_categorie', $Garantie->get_id_categorie(), PDO::PARAM_STR); 
			$req->bindParam(':image', $Garantie->get_image(), PDO::PARAM_STR); 
			$req->bindParam(':id_Garantie', $Garantie->get_id_Garantie(), PDO::PARAM_STR); 
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