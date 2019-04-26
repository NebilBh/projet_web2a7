<?PHP
include "../config.php";
class ReclamationC {
function afficherReclamation($reclamation){
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
	function ajouterReclamation($reclamation){
		$sql="insert into reclamation (nom,prenom,mail,tel,sujet,message) values (:nom,:prenom,:mail,:tel,:sujet,:message)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$reclamation->getnom();
        $prenom=$reclamation->getprenom();
        $mail=$reclamation->getmail();
        $tel=$reclamation->gettel();
        //$adresse=$reclamation->getadresse();
        $sujet=$reclamation->getsujet();
        $message=$reclamation->getmessage();



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
	/*
	function supprimerreclamation($cin){
		$sql="DELETE FROM reclamation where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierEmploye($employe,$cin){
		$sql="UPDATE employe SET cin=:cinn, nom=:nom,prenom=:prenom,nbHeures=:nbH,tarifHoraire=:tarifH WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
        $nb=$employe->getNbHeures();
        $tarif=$employe->getTarifHoraire();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nbH',$nb);
		$req->bindValue(':tarifH',$tarif);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEmploye($cin){
		$sql="SELECT * from employe where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}*/
}
?>