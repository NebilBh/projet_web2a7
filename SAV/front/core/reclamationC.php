<?PHP
include_once "../config.php";
include_once ("../entities/reclamation.php");

class ReclamationC {
/*function afficherreclamation($reclamation){
		echo "Cin: ".$reclamation$->getCin()."<br>";
		echo "Nom: ".$reclamation->getNom()."<br>";
		echo "Prénom: ".$reclamation->getPrenom()."<br>";
		echo "tarif heure: ".$reclamation->getteloraire()."<br>";
		echo "nb heures: ".$reclamation->getmaileures()."<br>";
	}*/
	//function calculerSalaire($reclamation){
	//	echo $reclamation->getmaileures() * $reclamation->getteloraire();
	//}
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
	
	/*function afficherreclamations(){
		//$sql="SElECT * From reclamation e inner join formationphp.reclamation a on e.cin= a.cin";
		//$sql="SElECT * From reclamation";
		//$db = config::getConnexion();
		//try{
		//$liste=$db->query($sql);
		//return $liste;
		//}
        //catch (Exception $e){
          /*  die('Erreur: '.$e->getMessage());
        }	
	}*/
	function supprimerReclamation($mail){
		$sql="DELETE FROM reclamation where mail= :mail";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':mail',$mail);
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
	
	
}
?>