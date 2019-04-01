<?php
	class Offre
	{
		private $id;
		private $idAdmin;
		private $article;
		private $articleOff;
		private $qte;
		private $dateD;
		private $dateF;
	

	function __Construct($id, $idAdmin, $article, $articleOff, $qte, $dateD, $dateF)
	{
		$this->id = $id;
		$this->idAdmin = $idAdmin;
		$this->article = $article;
		$this->articleOff = $articleOff;
		$this->qte   = $qte;
		$this->dateD = $dateD;
		$this->dateF = $dateF;
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

	function getArticleOff()
	{
		return $this->articleOff;
	}

	function getQte()
	{
		return $this->qte;
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