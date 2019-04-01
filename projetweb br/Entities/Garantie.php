<?php
	class Garantie
	{
		private $id_garantie;
		private $id_produit ; 
		private $date_vente;
		private $date_expiration;
		
//par defaut le public
		function __construct($id_garantie,$id_produit , $date_vente , $date_expiration)
		{
			$this->id_garantie = $id_garantie;
			$this->id_produit = $id_produit;
			$this->date_vente = $date_vente;
			$this->date_expiration = $date_expiration;
		}
		
		public function get_id_garantie()
		{
			return $this->id_garantie;
		}
		
		public function get_id_produit()
		{
			return $this->id_produit;
		}
		
		public function get_date_vente()
		{
			return $this->date_vente;
		}
		
		public function get_date_expiration()
		{
			return $this->date_expiration;
		}
		
	}
?>