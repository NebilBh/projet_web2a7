<?php
include "../Core/ProduitC.php";

	$xx='fff';
	if((isset($_GET['recherche'])))
	{
		$recherche = $_GET['recherche']; 
		
		$Produitc = new ProduitC();
		$tab = $Produitc->chercher("id_produit",$recherche);
		foreach($tab as $row)
		{
			echo $row['prix'];
?>

<script type="text/javascript">

	function chercher_id()
	{
		var prix = "<?php echo $xx; ?>";
		document.getElementsByName("prix")[0].value = prix ;
	}

</script>

<?php	
		}
	}
	else echo "erreur <br>";

?>