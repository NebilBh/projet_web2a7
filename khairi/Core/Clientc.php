<?php
//include "../config.php";
include "../Entities/Client.php";

class ClientC
{
	function ajouter($client)
	{
		$sql="insert into client(FirstName,LastName,Email,DateOfBirth,Password,Telephone) values (:firstName,:lastName,:email,:dateOfBirth,:password,:telephone)";
		$db=config::getConnexion();
		$req=$db->prepare($sql);
		
		$firstname=$client->getfirstname();
		$lastname=$client->getlastname();
		$email=$client->getemail();
		$dateof=$client->getdateofbirth();
		$password=$client->getpassword();
		$telephone=$client->gettelephone();
		
		$req->bindValue(':firstName',$firstname);
		$req->bindValue(':lastName',$lastname);
		$req->bindValue(':email',$email);
		$req->bindValue(':dateOfBirth',$dateof);
		$req->bindValue(':password',$password);
		$req->bindValue(':telephone',$telephone);
		
		try
		{
			$req->execute();
			return true;
		}
		catch (Exception $e)
		{
			echo 'Erreur '.$e->getMessage();
			return false;
		}
	}

	function supprimer($email)
	{
		$sql="delete from client where Email='$email'";
		$db=config::getConnexion();
		$req = $db->prepare($sql);

		try
		{
			$req->execute();
			return true;
		}
		catch(Exeption $e)
		{
			echo 'Erreur' .$e->getMessage();//.$e pour la concatination ' ' .
			return false;
		}
	}

	function modifier($emailold,$email,$password)
	{
		$sql="update client set Password=:password, Email=:email where Email=:emailold";
		$db = config::getConnexion();
		$req = $db->prepare($sql);

		try
		{
			$req->bindParam(':password', $password, PDO::PARAM_STR); 
			$req->bindParam(':email', $email, PDO::PARAM_STR); 
			$req->bindParam(':emailold', $emailold, PDO::PARAM_STR); 
			$req->execute();
			return true;
		}
		catch(Exeption $e)
		{
			echo 'Erreur '.$e->getMessage();
			return false;
		}
	}
	
	function afficher()
	{
		$sql="select * from client order by LastName";
		$db=config::getConnexion();
		try
		{
			$tab=$db->query($sql);
			return $tab;
		}
		catch (Exception $e)
		{
			echo 'Erreur '.$e->getMessage();
		}
	}

	function chercher($mot)
	{
		$db=config::getConnexion();
		$db->query("SET NAMES UTF8");

		try
		{
			$select_terme = $db->prepare("SELECT FirstName,LastName,Email,DateOfBirth,Password,Telephone FROM client WHERE FirstName LIKE ? OR LastName LIKE ? or Email LIKE ? or DateOfBirth LIKE ? or Password LIKE ? or Telephone LIKE ? or CardID LIKE ? order by LastName");
  			$select_terme->execute(array("%".$mot."%", "%".$mot."%", "%".$mot."%", "%".$mot."%", "%".$mot."%", "%".$mot."%", "%".$mot."%"));
  			return $select_terme;
  		}
  		catch (Exception $e)
		{
			echo 'Erreur '.$e->getMessage();
		}
	}

	function sendmail()
	{
		$db=config::getConnexion();
		$db->query("SET NAMES UTF8");

		$mot = date('m-d');

		try
		{
			$select_terme = $db->prepare("SELECT Email,FirstName,LastName FROM client where DateOfBirth LIKE ?");
  			$select_terme->execute(array("%".$mot."%"));
  			return $select_terme;
  		}
  		catch (Exception $e)
		{
			echo 'Erreur '.$e->getMessage();
		}
	}

	function get_nomprenom($mot)
	{
		$db=config::getConnexion();
		$db->query("SET NAMES UTF8");

		try
		{
			$select_terme = $db->prepare("SELECT FirstName,LastName FROM client where Email LIKE ?");
  			$select_terme->execute(array("%".$mot."%"));
  			return $select_terme;
  		}
  		catch (Exception $e)
		{
			echo 'Erreur '.$e->getMessage();
		}
	}

	function chercherlogin($email,$password)
	{
		$sql="SELECT COUNT(*) FROM client WHERE Email = :email AND Password = :password";
		$db=config::getConnexion();
		$req=$db->prepare($sql);

		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
		
		try
		{
			$req->execute();
			$resultat=$req->fetch();
			$req->closeCursor();

			if($resultat[0] == 0) 
			{
            	return false;
      		} 
      		else 
      		{
	            return true;
      		}
		}
		catch (Exception $e)
		{
			echo 'Erreur '.$e->getMessage();
			return false;
		}
	}
}

class CarteC
{
	function ajouterCarte($carte)
	{
		$sql="insert into carte(CardID,Points,FabricationDate) values (:cardID,:points,NOW())";
		$db=config::getConnexion();
		$req=$db->prepare($sql);
		
		$cardID=$carte->getcardID();
		$points=$carte->getpoints();

		$req->bindValue(':cardID',$cardID);
		$req->bindValue(':points',$points);
	
		try
		{
			$req->execute();
		}
		catch (Exception $e)
		{
			echo 'Erreur '.$e->getMessage();
		}
	}

	function modifierCarte($id,$nbpoints)
	{
		$sql="update carte set Points=:points where CardID=:id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);

		try
		{
			$req->bindParam(':id', $id, PDO::PARAM_STR);
			$req->bindParam(':points', $nbpoints, PDO::PARAM_STR);
			$req->execute();
			return true;
		}
		catch(Exeption $e)
		{
			echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
			return false;
		}
	}
	
	function afficherCarte()
	{
		$sql="select * from carte order by CardID";
		$db=config::getConnexion();
		try
		{
			$tab=$db->query($sql);
			return $tab;
		}
		catch (Exception $e)
		{
			echo 'Erreur '.$e->getMessage();
		}
	}

	function afficherCarteClient($id)
	{
		$con = new mysqli("localhost","root","","projetweb2a7final");
							// Check connection
							if ($con->connect_error) 
							{
							    die("Connection failed: " . $con->connect_error);
							}

							$sql = "SELECT * FROM carte WHERE CardID='$id'";
							$result = $con->query($sql);

							if ($result->num_rows > 0) 
							{
							   return $result;
							} 
							else 
							{
							    echo "0 results";
							}
							$con->close();
	}

	function chercherCarte($mot)
	{
		$db=config::getConnexion();
		$db->query("SET NAMES UTF8");

		try
		{
			$select_terme = $db->prepare("SELECT CardID,Points,FabricationDate FROM carte WHERE CardID LIKE ? OR Points LIKE ? or FabricationDate LIKE ? order by CardID");
  			$select_terme->execute(array("%".$mot."%", "%".$mot."%", "%".$mot."%"));
  			return $select_terme;
  		}
  		catch (Exception $e)
		{
			echo 'Erreur '.$e->getMessage();
		}
	}
	
	function topfive()
	{
		$sql="select Points,FirstName,LastName from carte a inner join client b on a.CardID=b.CardID order by Points DESC LIMIT 5";
		$db=config::getConnexion();
		try
		{
			$tab=$db->query($sql);
			return $tab;
		}
		catch (Exception $e)
		{
			echo 'Erreur '.$e->getMessage();
		}
	}
}
?>