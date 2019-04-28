<?php
include "../../Core/offresC.php";


if(isset ($_GET['id']))
{
	
	
	$id = $_GET['id'];
	

	$col ='id';
	$salec = new offreC();

	$mes = $salec->supprimer($col,$id);

	if($mes==true)
		{
			header("Location: afficher.php"); 
			
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


?>
