<?php
include "../../Core/soldesC.php";

echo '1';
if((isset ($_GET['idAdmin'])) &&(isset($_GET['article'])) && (isset($_GET['pct'])) && (isset($_GET['qte'])) &&isset($_GET['duree']))
{
	$duree = $_GET['duree'];

	extraire_date($dateD,$dateF,$duree);
	$id = 0;
	$idAdmin = $_GET['idAdmin'];
	$article = $_GET['article'];
	$pct = $_GET['pct'];
	$qte = $_GET['qte'];

	

	$sale = new Solde($id,$idAdmin,$article,$pct,$qte,$dateD,$dateF);
	$salec = new SoldeC();
	$mes = $salec->ajouter($sale);

	if($mes==true)
		{
			
			header("Location: afficher_soldes.php");
		}
		else 
		{
			echo "erreur";
		}
}
else
{
	echo "erreur2";
}

function extraire_date(&$dateD,&$dateF,$duree)
{
	$dateD = substr($duree,0,10);
	$dateF = substr($duree,13);

	$dateF=date("Y-m-d", strtotime($dateF));
	$dateD=date("Y-m-d", strtotime($dateD));
}

