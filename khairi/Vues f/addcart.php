<?php 
include "../config.php";
	session_start();
	



	
if(isset($_GET['id']))
{
		$quantite=1;
		$item_id=$_GET['id'];
		$db = config::getConnexion();
		$query = $db->prepare("SELECT * FROM produits WHERE id_produit ='$item_id'" );
		$query->execute();
		$productByCode=$query->fetch(PDO::FETCH_ASSOC);
		$itemArray = array($productByCode["Marque"]=>array('id_produit'=>$productByCode["id_produit"],'Marque'=>$productByCode["Marque"], 'prix'=>$productByCode["prix"], 'quantity'=>$quantite, 'image'=>$productByCode["image"]));
		//print_r($itemArray);
		//die();
		if(!empty($_SESSION["shopping_cart"])) 
			{
				
				if(in_array($productByCode["Marque"],array_keys($_SESSION["shopping_cart"]))) 
				{
					foreach($_SESSION["shopping_cart"] as $k => $v) 
					{
							if($productByCode["Marque"] == $k) 
							{
								if(empty($_SESSION["shopping_cart"][$k]["quantity"])) 
								{
									$_SESSION["shopping_cart"][$k]["quantity"] = 0;
								}
								$_SESSION["shopping_cart"][$k]["quantity"] += $quantite;
							}
					}
				} 
				else 
				{
					$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$itemArray);
				}
			} 
			else 
			{
				$_SESSION["shopping_cart"] = $itemArray;
			}
		
	
	header('Location: index.php');
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if  ( ($values["id_produit"] == $_GET["pid"]) && ( $_SESSION["shopping_cart"][$keys]["quantity"] > 1 ) )
			{
				$_SESSION["shopping_cart"][$keys]["quantity"]--;
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="checkout.php"</script>';
				break;
			}
			elseif ( ($values["id_produit"] == $_GET["pid"]) && ( $_SESSION["shopping_cart"][$keys]["quantity"] == 1 ) )
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="checkout.php"</script>';
				//break;
			}
		}
	}
}


?>