<?php
include "../config.php";
include "../Entities/Compte.php";

class CompteC
{
	function ajouter($Compte)
	{
		$db = config::getConnexion();//config.php
		$sql="insert into Comptes (email,username,pwd) values (:email,:username,:pwd)";
		
		try{
			//$id_Compte = $Compte->get_id_Compte();
			$email = $Compte->get_email();
			$username = $Compte->get_username();
			$pwd = $Compte->get_pwd();
			
			$req = $db->prepare($sql);

			$req->bindValue(':email',$email);
			$req->bindValue(':username',$username);
			$req->bindValue(':pwd',$pwd);
	
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
		$sql="select * from Comptes";
		
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
		$sql="select * from Comptes where(".$colonne."=".$valeur.")";
		
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
		$sql="delete from Comptes where(".$colonne."=".$valeur.")";
		
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
		$sql="select * from Comptes where(".$colonne."=".$valeur.")";
		
		try{
			$tab = $db->query($sql);
			return $tab;
		}
		catch(Exeption $e)
		{
			echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
		}
	}
	
	function modifier($Compte)
	{
		$db = config::getConnexion();//config.php
		$sql="update Comptes set email = :email ,username = :username ,pwd = :pwd where id = :id";
		
		try{
			$req = $db->prepare($sql);
			$req->bindParam(':email', $Compte->get_email(), PDO::PARAM_STR);
			$req->bindParam(':username', $Compte->get_username(), PDO::PARAM_STR); 
			$req->bindParam(':pwd', $Compte->get_pwd(), PDO::PARAM_STR); 
			$req->bindParam(':id', $Compte->get_id(), PDO::PARAM_STR); 
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