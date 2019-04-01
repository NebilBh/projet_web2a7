<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['tel']) and isset($_POST['mail'])and isset($_POST['adresse'])and isset($_POST['ville'])){
$livraison1=new livraison($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['mail'],$_POST['adresse'],$_POST['ville']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livraison1C=new LivraisonC();
$livraison1C->ajouterLivraison($livraison1);

$passage_ligne="\n";


	
 $towhom=$livraison1->getmail();
  $nommail=$livraison1->getNom();
   $prenommail=$livraison1->getPrenom();

	
	 $towhom =strtoupper($towhom);

	 $nommail = strtoupper($nommail);
	 $prenommail = strtoupper($prenommail);

	 $emailexp = 'africopticpro@gmail.com';

	 $subjectobjet = 'Bienvenue!';
	 $messagemail = 'cher(e)'.$nommail.' '.$prenommail.$passage_ligne;
	 $messagemail = 'africoptic vous informe que on bien recu votre livraison' .$passage_ligne;
     $messagemail ='on vous contactera pour confirmer votre livraison' .$passage_ligne;

     $headersmail = 'From: ' .$emailexp . "\r\n" .'Reply-To:' .$emailexp. "\r\n" .'X-Mailer: PHP/' .phpversion();
     $resultmail = mail($towhom, $subjectobjet, $messagemail, $headersmail);


//header('Location: afficherEmploye.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>