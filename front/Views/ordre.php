<?php
ob_start();
session_start();
include 'C:/wamp64/www/front/Entities/LigneCommande.php';
include 'C:/wamp64/www/front/Entities/Commande.php';
include '../config.php';
$db=config::getConnexion();
if(!empty($_SESSION["shopping_cart"])) 
{
$c=new Commande('',$_SESSION['r'],0);
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
	$lc=new LigneCommande((int)$idc,$_SESSION['shopping_cart'][$ids[$i]]['id'],$_SESSION['shopping_cart'][$ids[$i]]['quantity']);
	//var_dump($lc);
	$lc->AjouterLigneCommande();
	$total+=$_SESSION['shopping_cart'][$ids[$i]]['prix']*$_SESSION['shopping_cart'][$ids[$i]]['quantity'];
}
$c=new Commande((int)$idc,$_SESSION['r'],(int)$total);
$c->ModifierCommande();
echo '<script>alert("Commande passer avec succes!")</script>';
				echo '<script>window.location="checkout_connecte.php"</script>'; }
//var_dump($c);
// remove all session variables
else { echo '<script>alert("Impossible de passer une commande vide ...")</script>';
				echo '<script>window.location="checkout_connecte.php"</script>';}

?>

