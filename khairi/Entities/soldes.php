<?php	

class Solde
{
		private $id;
		private $idAdmin;
		private $article;
		private $pourcentage;
		private $quantite;
		private $dateD;
		private $dateF;

		function __Construct($id,$idAdmin,$article,$pourcentage,$quantite,$dateD,$dateF)
		{
			$this->id= $id;
			$this->idAdmin= $idAdmin;
			$this->article= $article;
			$this->pourcentage= $pourcentage;
			$this->quantite= $quantite;
			$this->dateD= $dateD;
			$this->dateF= $dateF;
		}

		function getId()
		{
			return $this->id;
		}

		function getIdAdmin()
		{
			return $this->idAdmin;
		}

		function getArticle()
		{
			return $this->article;
		}

		function getPct()
		{
			return $this->pourcentage;
		}
		function getQte()
		{
			return $this->quantite;
		}
		function getDateD()
		{
			return $this->dateD;
		}
		function getDateF()
		{
			return $this->dateF;
		}
		
}
?>		