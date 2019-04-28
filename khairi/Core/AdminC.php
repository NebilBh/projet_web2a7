<?php
include "../config.php";
include "../Entities/Admin.php";

class AdminC
{
	function ajouter($Compte)
	{
		$db = config::getConnexion();//config.php
		$sql="insert into Admin (email,username,pwd,role) values (:email,:username,:pwd,:role)";
		
		try{
			//$id_Compte = $Compte->get_id_Compte();
			$email = $Compte->get_email();
			$username = $Compte->get_username();
			$pwd = $Compte->get_pwd();
			$role = $Compte->get_role();
			
			$req = $db->prepare($sql);

			$req->bindValue(':email',$email);
			$req->bindValue(':username',$username);
			$req->bindValue(':pwd',$pwd);
			$req->bindValue(':role',$role);
	
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
		$sql="select * from Admin";
		
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
		$sql="select * from Admin where(".$colonne."=".$valeur.")";
		
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
		$sql="delete from Admin where(".$colonne."=".$valeur.")";
		
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
		$sql="select * from Admin where(".$colonne."=".$valeur.")";
		
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
		$sql="update Admin set email = :email ,username = :username ,pwd = :pwd , role = :role where id = :id";
		
		try{
			$req = $db->prepare($sql);
			$req->bindValue(':email',$email);
			$req->bindValue(':username',$username);
			$req->bindValue(':pwd',$pwd);
			$req->bindValue(':role',$role);
			$req->bindValue(':di',$id);
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