<?php
ob_start();
session_start();
include '../Entities/LigneCommande.php';
include '../Entities/Commande.php';
include '../config.php';
$db=config::getConnexion();
if(!empty($_SESSION["shopping_cart"])) 
{
$c=new Commande('',$_SESSION['var'],0);
//var_dump($c);
$c->AjouterCommande();
//var_dump($_SESSION["shopping_cart"]);
$ids=array_keys($_SESSION["shopping_cart"]);
//var_dump($ids);
$idc=$c->lastid();
//var_dump($idc);
$total=0;
for($i=0;$i<count($ids);$i++)
{
	$lc=new LigneCommande((int)$idc,$_SESSION['shopping_cart'][$ids[$i]]['id_produit'],$_SESSION['shopping_cart'][$ids[$i]]['quantity']);
	//var_dump($lc);
	$lc->AjouterLigneCommande();
	$total+=$_SESSION['shopping_cart'][$ids[$i]]['prix']*$_SESSION['shopping_cart'][$ids[$i]]['quantity'];
}
$c=new Commande((int)$idc,$_SESSION['var'],(int)$total);
$c->ModifierCommande();
echo '<script>alert("Commande passer avec succes!")</script>';
				echo '<script>window.location="checkout.php"</script>'; }
//var_dump($c);
// remove all session variables
else { echo '<script>alert("Impossible de passer une commande vide ...")</script>';
				echo '<script>window.location="checkout.php"</script>';}

?>

