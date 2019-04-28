<?php
include ("../config.php");
include ("../Entities/offres.php");

class OffreC
{
	function ajouter($offre)
	{
		$db = config::getConnexion();//config.php
		$sql="insert into offres (idAdmin,article,articleOff,qte,dateD,dateF) values 
		(:idAdmin, :article,:articleOff,:qte,:dateD,:dateF)";
		
		try{
			
			
			$idAdmin = $offre->getIdAdmin();
			$article = $offre->getArticle();
			$articleOff = $offre->getArticleOff();
			$qte = $offre->getQte();
			$dateD = $offre->getDateD();
			$dateF = $offre->getDateF();
			

			$req = $db->prepare($sql);

			
			$req->bindValue(':idAdmin',$idAdmin);
			$req->bindValue(':article',$article);
			$req->bindValue(':articleOff',$articleOff);
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
		$sql="select * from offres";
		
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
		$sql="select * from offres where(".$colonne."=".$valeur.")";
		
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
		$sql="delete from offres where(".$colonne."=".$valeur.")";
		
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

	function modifier($offre)
	{
		$db = config::getConnexion();//config.php
		$sql="UPDATE offres set idAdmin = :idAdmin, article =:article, articleOff = :articleOff, qte=:qte, dateD =:dateD, dateF=:dateF  where id = :id";
		
		try{
			$req = $db->prepare($sql);

			$id=$offre->getId();
			$idAdmin=$offre->getIdAdmin();
			$article=$offre->getArticle();
			$articleOff=$offre->getArticleOff();
			$qte=$offre->getQte();
			$dateD=$offre->getDateD();
			$dateF=$offre->getDateF();
			

			$req->bindParam(':id', $id, PDO::PARAM_STR);
			$req->bindParam(':idAdmin', $idAdmin, PDO::PARAM_STR);
			$req->bindParam(':article', $article, PDO::PARAM_STR); 
			$req->bindParam(':articleOff', $articleOff , PDO::PARAM_STR); 
			$req->bindParam(':qte', $qte, PDO::PARAM_STR); 
			$req->bindParam(':dateD', $dateD, PDO::PARAM_STR); 
			$req->bindParam(':dateF', $dateF, PDO::PARAM_STR); 

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