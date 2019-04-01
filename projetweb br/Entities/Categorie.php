<?php
	class Categorie
	{
		private $id_categorie;
		private $nom ; 
		private $description;
		
//par defaut le public
		function __construct($id_categorie,$nom , $description)
		{
			$this->id_categorie = $id_categorie;
			$this->nom = $nom;
			$this->description = $description;
		}
		
		public function get_id_categorie()
		{
			return $this->id_categorie;
		}
		
		public function get_nom()
		{
			return $this->nom;
		}
		
		public function get_description()
		{
			return $this->description;
		}
		
		
	}
?>