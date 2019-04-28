<?PHP
include "../Core/livraisonC.php";
$livraisonC=new LivraisonC();
if (isset($_POST["mail"])){
	$livraisonC->supprimerLivraison($_POST["mail"]);
	//header('Location: afficherEmploye.php');
	header('Location: livraison.php');
}

?>