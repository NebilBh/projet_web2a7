<?PHP
include "../core/reclamationC.php";
$reclamationC=new ReclamationC();
if (isset($_POST["mail"])){
	$reclamationC->supprimerReclamation($_POST["mail"]);
	//header('Location: afficherEmploye.php');



//header('http://http://localhost/PROJET1/front/views/shop.html');


}

?>