<?php
include ("C:/xampp/htdocs/test/config.php");
include ("C:/xampp/htdocs/test/Entities/soldes.php");

class SoldeC
{
	function ajouter($solde)
	{
		$db = config::getConnexion();//config.php
		$sql="insert into soldes (idAdmin,article,pct,qte,dateD,dateF) values 
		(:idAdmin, :article,:pct,:qte,:dateD,:dateF)";
		
		try{
			
			
			$idAdmin = $solde->getIdAdmin();
			$article = $solde->getArticle();
			$pct = $solde->getPct();
			$qte = $solde->getQte();
			$dateD = $solde->getDateD();
			$dateF = $solde->getDateF();
			

			$req = $db->prepare($sql);

			
			$req->bindValue(':idAdmin',$idAdmin);
			$req->bindValue(':article',$article);
			$req->bindValue(':pct',$pct);
			$req->bindValue(':dateD',$dateD);
			$req->bindValue(':dateF',$dateF);
			$req->bindValue(':qte',$qte);
			
			$req->execute();
			return true;
		}
		catch(Exeption $e)
		{
			echo 'erreur3' .$e->getMessage();//.$e pour la concatination ' ' .
			return false;
		}
	}

	function afficher()
	{
		$db = config::getConnexion();//config.php
		$sql="select * from soldes";
		
		try{
			$tab = $db->query($sql);
			return $tab;
		}
		catch(Exeption $e)
		{
			echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
		}
	}

	function chercher($colonne,$valeur)
	{
		$db = config::getConnexion();//config.php
		$sql="select * from soldes where(".$colonne."=".$valeur.")";
		
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
		$sql="delete from soldes where(".$colonne."=".$valeur.")";
		
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

	function modifier($solde)
	{
		$db = config::getConnexion();//config.php
		$sql="UPDATE soldes set idAdmin = :idAdmin ,article =:article ,pct = :pct ,qte=:qte ,dateD = :dateD, dateF=:dateF  where id = :id";
		
		try{
			$req = $db->prepare($sql);
			$id=$solde->getId();
			$idAdmin=$solde->getIdAdmin();
			$article=$solde->getArticle();
			$pct=$solde->getPct();
			$qte=$solde->getQte();
			$dateD=$solde->getDateD();
			$dateF=$solde->getDateF();

			$req->bindParam(':id',$id,PDO::PARAM_STR);
			$req->bindParam(':idAdmin', $idAdmin,PDO::PARAM_STR);
			$req->bindParam(':article',$article, PDO::PARAM_STR); 
			$req->bindParam(':pct',$pct , PDO::PARAM_STR); 
			$req->bindParam(':qte',$qte,PDO::PARAM_STR); 
			$req->bindParam(':dateD',$dateD,PDO::PARAM_STR); 
			$req->bindParam(':dateF',$dateF,PDO::PARAM_STR); 
			$req->execute();

			return true;
		}
		catch(Exeption $e)
		{
			echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
		}
	}
}
?>