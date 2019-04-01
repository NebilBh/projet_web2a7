<?php
                  $passage_ligne = "\n";

                  if(isset($_POST['emailsolde']))
                  {
                      $towhom = $_POST['emailsolde'];

                      $emailexp = 'africopticpro@gmail.com';

                      $subjectobjet = 'Promotion';
                      $messagemail .= 'Afric Optic vous offre une réduction de 50% pour votre première paire de lunettes.'.$passage_ligne.$passage_ligne;
                      $messagemail .= 'Rendez-vous à notre boutique à la Marsa, rue Abdelhafidh El Mekki avec ce courrier pour bénéficier de cette remise.'.$passage_ligne.$passage_ligne;
                      $messagemail .= 'À très bientôt!'.$passage_ligne.$passage_ligne;
                      $messagemail .= 'AFRIC OPTIC'.$passage_ligne.$passage_ligne;

                      $headersmail = 'From: ' .$emailexp . "\r\n". 
                          'Reply-To: ' . $emailexp. "\r\n" . 
                          'X-Mailer: PHP/' . phpversion();
                      $resultmail = mail($towhom, $subjectobjet, $messagemail, $headersmail);


                      header("Location: http://localhost:1234/crudclient/views/frontsite/shop.html");
                      exit;
                }
?>