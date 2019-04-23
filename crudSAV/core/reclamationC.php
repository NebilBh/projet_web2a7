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
		$sql="insert into reclamation (code,nom,prenom,mail,tel,sujet,message) values (:code,:nom,:prenom,:mail,:tel,:sujet,:message)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$code=$reclamation->getcode();
        $nom=$reclamation->getnom();
        $prenom=$reclamation->getprenom();
        $mail=$reclamation->getmail();
        $tel=$reclamation->gettel();
       // $adresse=$reclamation->getadresse();
        $sujet=$reclamation->getsujet();
        $message=$reclamation->getmessage();


		$req->bindValue(':code',$code);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':tel',$tel);
		//$req->bindValue(':adresse',$adresse);
	    $req->bindValue(':sujet',$sujet);
	    $req->bindValue(':message',$message);

	
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
	function supprimerReclamation($code){
		$sql="DELETE FROM reclamation where code= :code";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':code',$code);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamation($reclamation){
		$sql="UPDATE reclamation SET  nom=:nom,prenom=:prenom,mail=:mail,tel=:tel,sujet=:sujet,message=:message WHERE code=:code";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$code=$reclamation->getcode();
        $nom=$reclamation->getnom();
        $prenom=$reclamation->getprenom();
        $mail=$reclamation->getmail();
        $tel=$reclamation->gettel();
        $sujet = $reclamation->getsujet();
        $message = $reclamation->getmessage();

		$datas = array(':nom'=>$nom,':prenom'=>$prenom,':mail'=>$mail,':tel'=>$tel,':sujet'=>$sujet,':message'=>$message);

		
		$req->bindValue(':code',$code);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':message',$message);
		
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
		$sql="SELECT * from reclamation where (".$colonne."=".$valeur.")";
		
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