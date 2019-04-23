<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";

if (isset($_POST['code']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail']) and isset($_POST['tel'])and isset($_POST['sujet']) and isset($_POST['message'])  ){
$reclamation1=new Reclamation($_POST['code'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['tel'],$_POST['sujet'],$_POST['message']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$reclamation1C=new ReclamationC();
$reclamation1C->ajouterReclamation($reclamation1);
//header('Location: afficherEmploye.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>