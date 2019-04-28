<?PHP
include "../Entities/livraison.php";
include "../Core/livraisonC.php";
echo $_POST['descr'];
if (isset($_POST['descr']) && isset($_POST['mail']));
{
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3





$passage_ligne="\n";


	
 $towhom=$_POST['mail'];
  $nommail="imed";
  /* $prenommail=$livraison1->getPrenom();*/

	
	 $towhom =strtoupper($towhom);

	 $nommail = strtoupper($nommail);
	/* $prenommail = strtoupper($prenommail);*/

	 $emailexp = 'africopticpro@gmail.com';
	 echo $_POST['descr'];
	 
	 $subjectobjet = 'Reponse Reclamation';
	 $messagemail = $_POST['descr'];
	 

     $headersmail = 'From: ' .$emailexp . "\r\n" .'Reply-To:' .$emailexp. "\r\n" .'X-Mailer: PHP/' .phpversion();
     $resultmail = mail($towhom, $subjectobjet, $messagemail, $headersmail);


header('Location: reclamationn.php');
	

//*/
}
?>