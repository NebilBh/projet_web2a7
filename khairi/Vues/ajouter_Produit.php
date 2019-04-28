<?php
include('../Core/ProduitC.php');

	if((isset($_POST['prix']))&&(isset($_POST['caracteristiques']))
		&&(isset($_POST['marque']))&&(isset($_POST['date_expiration']))
	&&(isset($_POST['sexe']))&&(isset($_POST['forme']))
	&&(isset($_POST['note']))&&(isset($_POST['id_categorie'])) )// iset pour verifier s'il existe le name 'nom' et 'prenom'$
	{

		echo "nadhir <br>";
		$id_produit = null;
		$prix = $_POST['prix']; 
		$caracteristiques = $_POST['caracteristiques'];
		$marque = $_POST['marque'];
		$date_creation = date("Y-m-d H:i:s");
		$old_date_expiration = $_POST['date_expiration'];
		$date_expiration  = date('Y-m-d', strtotime($old_date_expiration));
		$sexe = $_POST['sexe'];	
		$forme = $_POST['forme'];
		$note = $_POST['note'];
		$image = $_FILES["fileToUpload"]["name"];
		$date_vente = null;
		$id_categorie=null;
		
		$condition = true; 
		if( !is_numeric($prix) || (int)$prix<0 )$condition = false; 
		if(strlen($caracteristiques)>500)$condition = false;
		if(strlen($image)>500)$condition = false;
		if(strlen($marque)>100)$condition = false;
		
		if($condition==true)
		{
			$p = new Produit($id_produit,$prix , $caracteristiques ,$marque ,$date_creation , $date_expiration , $sexe , $forme , $note , $id_categorie ,$image , $date_vente);
			$Produitc = new ProduitC();
			$mes = $Produitc->ajouter($p);
			echo 'resultat' .$mes;
			if($mes==true)
			{
				header('Location: produit_ajouter.html');
				if($image!="")
					{
						copier_image("./images/");
						copier_image("../Vues f/images/");
					}
				echo "ajout avec succes";
			}
			else 
			{
				echo "erreur";
			}
		}
		else echo "champs non validé !";
		
	}
	else echo "erreur <br>";
	
	function copier_image($target_dir)
	{
		//$target_dir = "./images/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
	}

?>