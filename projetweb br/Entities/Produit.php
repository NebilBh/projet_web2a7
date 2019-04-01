<?php
	class Produit
	{
		private $id_produit;
		private $prix ; 
		private $caracteristiques;
		private $marque;
		private $date_creation;
		private $date_expiration;
		private $sexe;
		private $forme;
		private $note;
		private $id_categorie;
		private $image;
		private $date_vente;
//par defaut le public
		function __construct($id_produit,$prix , $caracteristiques ,$marque ,$date_creation , $date_expiration , $sexe , $forme , $note , $id_categorie ,$image , $date_vente)
		{
			$this->id_produit = $id_produit;
			$this->prix = $prix;
			$this->caracteristiques = $caracteristiques;
			$this->marque = $marque;
			$this->date_creation = $date_creation;
			$this->date_expiration = $date_expiration;
			$this->sexe = $sexe;
			$this->forme = $forme;
			$this->note = $note;
			$this->id_categorie = $id_categorie;
			$this->image = $image;
			$this->date_vente = $date_vente;
		}
		
		public function get_id_produit()
		{
			return $this->id_produit;
		}
		
		public function get_prix()
		{
			return $this->prix;
		}
		
		public function get_caracteristiques()
		{
			return $this->caracteristiques;
		}
		
		public function get_marque()
		{
			return $this->marque;
		}
		
		public function get_date_creation()
		{
			return $this->date_creation;
		}
		
		public function get_date_expiration()
		{
			return $this->date_expiration;
		}
		
		public function get_sexe()
		{
			return $this->sexe;
		}
		
		public function get_forme()
		{
			return $this->forme;
		}
		
		public function get_note()
		{
			return $this->note;
		}
		
		public function get_id_categorie()
		{
			return $this->id_categorie;
		}
		
		public function get_image()
		{
			return $this->image;
		}
		
		public function get_date_vente()
		{
			return $this->date_vente;
		}
		
		
	}
?>