<?PHP
include "../Core/reclamationC.php";
$reclamationC=new ReclamationC();
if (isset($_POST["sujet"])){
	$reclamationC->supprimerReclamation($_POST["sujet"]);
	header('Location: index.php');



//header('http://http://localhost/PROJET1/front/views/shop.html');


}

?>