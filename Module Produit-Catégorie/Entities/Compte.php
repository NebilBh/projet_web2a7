<?php
	class Compte
	{
		private $id;
		private $email ; 
		private $username;
		private $pwd;
//par defaut le public
		function __construct($id,$email,$username , $pwd)
		{
			$this->id = $id;
			$this->email = $email;
			$this->username = $username;
			$this->pwd = $pwd;
		}
		
		public function get_id()
		{
			return $this->id;
		}

		public function get_email()
		{
			return $this->email;
		}
		
		public function get_username()
		{
			return $this->username;
		}
		
		public function get_pwd()
		{
			return $this->pwd;
		}
		
		
	}
?>