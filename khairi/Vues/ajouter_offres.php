<?php
include "../Core/offresC.php";


if((isset ($_GET['idAdmin'])) &&(isset($_GET['article'])) && (isset($_GET['articleOff'])) && (isset($_GET['qte'])) &&isset($_GET['duree']))
{
	$duree = $_GET['duree'];

	extraire_date($dateD,$dateF,$duree);
	$id = 0;
	$idAdmin = $_GET['idAdmin'];
	$article = $_GET['article'];
	$articleOff = $_GET['articleOff'];
	$qte = $_GET['qte'];

	

	$off = new Offre($id,$idAdmin,$article,$articleOff,$qte,$dateD,$dateF);
	$offc = new OffreC();
	$mes = $offc->ajouter($off);

	if($mes==true)
		{
			header('Location: afficher_offre.php');
			echo 'ajout avec succes';
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
?>
