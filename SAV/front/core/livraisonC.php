<?PHP
include "../config.php";
class LivraisonC {
function afficherLivraison ($livraison){
		echo "Cin: ".$livraison->getCin()."<br>";
		echo "Nom: ".$livraison->getNom()."<br>";
		/*echo "Prénom: ".$livraison->getPrenom()."<br>";*/
		echo "telephone: ".$livraison->gettel()."<br>";
		echo "email: ".$livraison->getmail()."<br>";
		echo "adresse: ".$livraison->getadresse()."<br>";
		echo "ville: ".$livraison->getville()."<br>";

	}
	//function calculerSalaire($employe){
	//	echo $employe->getNbHeures() * $employe->getTarifHoraire();
	//}
	function ajouterLivraison($livraison){
		$sql="insert into livraison (cin,nom,tel,mail,adresse,ville) values (:cin,:nom,:tel,:mail,:adresse,:ville)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$livraison->getCin();
        $nom=$livraison->getNom();
       /* $prenom=$livraison->getPrenom();*/
        $tel=$livraison->gettel();
        $mail=$livraison->getmail();
        $adresse=$livraison->getadresse();
        $ville=$livraison->getville();


		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		/*$req->bindValue(':prenom',$prenom);*/
		$req->bindValue(':tel',$tel);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':ville',$ville);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivraisons (){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLivraison($cin){
		$sql="DELETE FROM livraison where cin=:cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
            header('Location: shop.html');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierLivraison($livraison){
		$sql="UPDATE livraison SET nom=:nom,tel=:tel,mail=:mail,adresse=:adresse,ville=:ville WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cin=$livraison->getCin();
        $nom=$livraison->getNom();
        /*$prenom=$livraison->getPrenom();*/
        $tel=$livraison->gettel();
        $mail=$livraison->getmail();
        $adresse=$livraison->getadresse();
        $ville=$livraison->getville();

		$datas = array(':nom'=>$nom,':tel'=>$tel,':mail'=>$mail,':adresse'=>$adresse,':ville'=>$ville);
		
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		/*$req->bindValue(':prenom',$prenom);*/
		$req->bindValue(':tel',$tel);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':ville',$ville);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

		function recupererLivraison($colonne,$valeur){
		$db = config::getConnexion();
		$sql="SELECT * from livraison where (".$colonne."=".$valeur.")";
		
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