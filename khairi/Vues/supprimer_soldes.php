<?php
include "../Core/soldesC.php";

echo '1';
if(isset ($_GET['id']))
{
	
	
	$id = $_GET['id'];
	

	$col ='id';
	$salec = new SoldeC();

	$mes = $salec->supprimer($col,$id);

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


?>
