<?PHP
include "../core/reclamationC.php";
$reclamationC=new ReclamationC();
if (isset($_POST["code"])){
	$reclamationC->supprimerReclamation($_POST["code"]);
	//header('Location: afficherEmploye.php');



header('http://http://localhost/PROJET1/front/views/shop.html');


}

?>