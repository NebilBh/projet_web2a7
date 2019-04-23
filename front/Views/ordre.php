<?php
ob_start();
session_start();
include 'C:/wamp64/www/FRONT GHASSEN/Entities/LigneCommande.php';
include 'C:/wamp64/www/FRONT GHASSEN/Entities/Commande.php';
include '../config.php';
$db=config::getConnexion();
$c=new Commande('',13,0);
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
$c=new Commande((int)$idc,13,(int)$total);
$c->ModifierCommande();
//var_dump($c);
header('Location: checkout.php');
?>