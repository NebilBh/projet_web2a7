<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";

if (isset($_POST['mail']) and isset($_POST['tel']) and isset($_POST['categorie'])and isset($_POST['sujet']) and isset($_POST['message']) and isset($_POST['dater']) ){
$reclamation1=new Reclamation($_POST['mail'],$_POST['tel'],$_POST['categorie'],$_POST['sujet'],$_POST['message'],$_POST['dater']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
//$condition =true;
$datetime = date("Y-m-d ");



$tel=$_POST['tel'];
$dater=$_POST['dater'];



if((strlen($tel)==8)&&($dater<=$datetime))//$condition=false;
//if($condition==true)
{


$reclamation1C=new ReclamationC();
$reclamation1C->ajouterReclamation($reclamation1);

header('Location: shop.html');
}	

else{
	echo "vérifier les champs";
}
//*/
}
?>