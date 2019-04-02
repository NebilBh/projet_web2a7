<?php
include "../Core/livreurCore.php";

	if((isset($_GET['recherche'])))
	{
		$recherche = $_GET['recherche']; 
		
		$livreurC = new livreurC();
		$mes = $livreurC->supprimer("id_livreur",$recherche);
		
	}
	
			header('Location: livreur_supprimer.html');


?>

<script>
	function onchange()
	{
		<?php 
			echo "changement<br>";
		?>
	}
</script>