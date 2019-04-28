<?php
include "../config.php";
  include "../core/Clientc.php";
  
              $clientC1 = new ClientC();
              $passage_ligne = "\n";

              $temp1 = $clientC1->sendmail();
              $data1 = $temp1->fetchAll();
              
              foreach ($data1 as $row) 
              {
                  $towhom = $row['Email'];
                  $nommail = $row['LastName'];
                  $prenommail = $row['FirstName'];

                  $nommail = strtoupper($nommail);
                  $prenommail = strtoupper($prenommail);

                  $emailexp = 'africopticpro@gmail.com';

                  $subjectobjet = 'Joyeux Anniversaire!';
                  $messagemail = 'Cher(e) '.$nommail.' '.$prenommail.$passage_ligne.$passage_ligne;
                  $messagemail .= 'Afric Optic vous souhaite un joyeux anniversaire et vous offre une réduction de 20% sur votre prochain achat.'.$passage_ligne.$passage_ligne;
                  $messagemail .= 'Rendez-vous à notre boutique à la Marsa, rue Abdelhafidh El Mekki avec ce courrier pour bénéficier de cette remise.'.$passage_ligne.$passage_ligne;
                  $messagemail .= 'À très bientôt!'.$passage_ligne.$passage_ligne;
                  $messagemail .= 'AFRIC OPTIC'.$passage_ligne.$passage_ligne;

                  $headersmail = 'From: ' .$emailexp . "\r\n". 
                      'Reply-To: ' . $emailexp. "\r\n" . 
                      'X-Mailer: PHP/' . phpversion();
                  $resultmail = mail($towhom, $subjectobjet, $messagemail, $headersmail);
              }

              header("Location: gestionclient.php");
              exit;
?>