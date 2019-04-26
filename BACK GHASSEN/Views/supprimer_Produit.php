<?php
include "../Core/CommandeCore.php";

	if((isset($_GET['recherche'])))
	{
		$recherche = $_GET['recherche']; 
		
		$CommandeC = new CommandeCore();
		$mes = $CommandeC->supprimer("id",$recherche);
		
					header('Location: produit_supprimer.html'); }


?>

<script>
	function onchange()
	{
		<?php 
			echo "changement<br>";
		?>
	}
</script>