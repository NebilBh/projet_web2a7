<?php
class Client 
{
	private $firstname;
	private $lastname;
	private $email;
	private $dateofbirth;
	private $password;
	private $telephone;
	
	function __construct($firstname,$lastname,$email,$dateofbirth,$password,$telephone)
	{
		$this->firstname=$firstname;
		$this->lastname=$lastname;
		$this->email=$email;
		$this->dateofbirth=$dateofbirth;
		$this->password=$password;
		$this->telephone=$telephone;
	}
	
	function getfirstname()
	{
		return $this->firstname;
	}
	
	function getlastname()
	{
		return $this->lastname;
	}
	
	function getemail() 
	{
		return $this->email;
	}

	function getdateofbirth() 
	{
		return $this->dateofbirth;
	}

	function getpassword() 
	{
		return $this->password;
	}

	function gettelephone() 
	{
		return $this->telephone;
	}
	
	function setpassword($password)
	{
		$this->password=$password;
	}
}

class Carte
{
	private $cardID;
	private $points;
	private $fabrication;
	
	function __construct($cardID,$points)
	{
		$this->cardID=$cardID;
		$this->points=$points;
	}

	function getcardID()
	{
		return $this->cardID;
	}
	
	function getpoints()
	{
		return $this->points;
	}
	
	function getfabrication()
	{
		return $this->fabrication;
	}

	function setpoints($points)
	{
		$this->points=$points;
	}
}
?>