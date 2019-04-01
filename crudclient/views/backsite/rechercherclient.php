<?php
  include "../../core/Clientc.php";
          if(isset($_GET['rech']))
          {
            $_GET['rech'] = htmlspecialchars($_GET['rech']); //pour sécuriser le formulaire contre les intrusions html
            $recherche=$_GET['rech'];

            if(!empty($_GET['rech']))
            {
                $recherche = trim($recherche); //pour supprimer les espaces dans la requête de l'internaute
                $recherche = strip_tags($recherche); //pour supprimer les balises html dans la requête

                $clientC = new ClientC();
                $tab=$clientC->chercher($recherche);

                ?>
                    <title> Afric Optic </title>
                    <link href="css/tableau.css" rel="stylesheet">
                    <link href="css/bouton.css" rel="stylesheet">
                    <link href="css/bootstrap.min.css" rel="stylesheet">
                    <script language="javascript" type="text/javascript" src="js/gestion.js"></script>
                <table id="datatable" class="table table-striped table-bordered">
                <tr>
                    <td class="firstline">Nom</td>
                    <td class="firstline">Prénom</td>
                    <td class="firstline">Email</td>
                    <td class="firstline">Date de naissance</td>
                    <td class="firstline">Mot de passe</td>
                    <td class="firstline">Téléphone</td>
                </tr>

                <?php
                 while($terme_trouve = $tab->fetch())
                  {
                   echo "<tr><td>".$terme_trouve['LastName']."</td><td>".$terme_trouve['FirstName']."</td><td>".$terme_trouve['Email']."</td><td>".$terme_trouve['DateOfBirth']."</td><td>".$terme_trouve['Password']."</td><td>".$terme_trouve['Telephone']."</td></tr>";
                  }
                  $tab->closeCursor();
                  ?>
                      </table>
                        <div class="form-group">
                          <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-success" id="bouton1" onclick="gestionclient()">Retourner</button>
                          </div>
                        </div>

                  <?php
            }
          }
?>