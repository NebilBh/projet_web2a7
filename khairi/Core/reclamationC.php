<?PHP
include_once "../config.php";
include_once ("../Entities/reclamation.php");

class ReclamationC {

	function ajouterReclamation($reclamation){
		$sql="insert into reclamation (mail,tel,categorie,sujet,message,dater) values (:mail,:tel,:categorie,:sujet,:message,:dater)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $mail=$reclamation->getmail();
        $tel=$reclamation->gettel();
        $categorie=$reclamation->getcategorie();
        $sujet=$reclamation->getsujet();
        $message=$reclamation->getmessage();
        $dater=$reclamation->getdater();



		$req->bindValue(':mail',$mail);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':categorie',$categorie);
	    $req->bindValue(':sujet',$sujet);
	    $req->bindValue(':message',$message);
	    $req->bindValue(':dater',$dater);


	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function supprimerReclamation($sujet){
		$sql="DELETE FROM reclamation where sujet= :sujet";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':sujet',$sujet);
		try{
            $req->execute();
           header('Location: index.html');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamation($reclamation){
		$sql="UPDATE reclamation SET  tel=:tel,categorie=:categorie,sujet=:sujet,message=:message,dater=:dater WHERE mail=:mail";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $mail=$reclamation->getmail();
        $tel=$reclamation->gettel();
        $categorie=$reclamation->getcategorie();
        $sujet = $reclamation->getsujet();
        $message = $reclamation->getmessage();
        $dater = $reclamation->getdater();

		$datas = array(':tel'=>$tel,':categorie'=>$categorie,':sujet'=>$sujet,':message'=>$message,':dater'=>$dater);

		
	
		$req->bindValue(':mail',$mail);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':message',$message);
		$req->bindValue(':dater',$dater);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererReclamation($colonne,$valeur){
		
		$db = config::getConnexion();
		$sql= "SELECT * from reclamation where mail= '$valeur'";
		
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur 2 : '.$e->getMessage());
        }
	}

//back

	function back_afficherReclamation($reclamation){
		echo "nom: ".$reclamation->getnom()."<br>";
		echo "prénom: ".$reclamation->getprenom()."<br>";
		echo "mail: ".$reclamation->getmail()."<br>";
		echo "tel: ".$reclamation->gettel()."<br>";
		//echo "adresse: ".$reclamation->getadresse()."<br>";
		echo "sujet: ".$reclamation->getsujet()."<br>";
		echo "message: ".$reclamation->getmessage()."<br>";



	}
	//function calculerSalaire($reclamation){
	//	echo $reclamation->getNbHeures() * $employe->getTarifHoraire();
	//}
	
	
	function afficherReclamations(){
		$sql="SElECT FirstName, LastName,dater,mail,tel,categorie,message,sujet, e.email from client e inner join reclamation d on e.email= d.mail";
		//$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	
}
?>