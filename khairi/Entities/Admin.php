<?php
	class Admin
	{
		private $id;
		private $email ; 
		private $username;
		private $pwd;
		private $role;
//par defaut le public
		function __construct($id,$email,$username , $pwd, $role)
		{
			$this->id = $id;
			$this->email = $email;
			$this->username = $username;
			$this->pwd = $pwd;
			$this->role = $role;
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
		
		public function get_role()
		{
			return $this->role;
		}
		
		
	}
?>