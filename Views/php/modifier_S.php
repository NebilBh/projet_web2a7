<?php }
} 
include "../../Core/soldesC.php"
if (isset($_GET['id'])){
echo "2";
	$duree = $_GET['duree'];
	extraire_date($dateD,$dateF,$duree);

	$solde=new Solde($_GET['id'],$_GET['idAdmin'],$_GET['article'],$_GET['pct'],$_GET['qte'],$dateD,$dateF);
	$mes = $soldeC->modifier($solde);
	if($mes == true )
	{

		echo "1";
	header('Location: afficher_soldes.solde');
	}
}

function extraire_date(&$dateD,&$dateF,$duree)
{
	$dateD = substr($duree,0,10);
	$dateF = substr($duree,13);

	$dateF=date("Y-m-d", strtotime($dateF));
	$dateD=date("Y-m-d", strtotime($dateD));
}



?>