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

                $carteC = new CarteC();
                $tab=$carteC->chercherCarte($recherche);

                ?>
                    <title> Afric Optic </title>
                    <link href="css/tableau.css" rel="stylesheet">
                    <link href="css/bouton.css" rel="stylesheet">
                    <link href="css/bootstrap.min.css" rel="stylesheet">
                    <script language="javascript" type="text/javascript" src="js/gestion.js"></script>
                <table id="datatable" class="table table-striped table-bordered">
                <tr>
                    <td class="firstline">Points</td>
                    <td class="firstline">Date de fabrication</td>
                    <td class="firstline">ID de la carte</td>
                </tr>

                <?php
                 while($terme_trouve = $tab->fetch())
                  {
                   echo "<tr><td>".$terme_trouve['Points']."</td><td>".$terme_trouve['FabricationDate']."</td><td>".$terme_trouve['CardID']."</td></tr>";
                  }
                  $tab->closeCursor();
                  ?>
                      </table>
                        <div class="form-group">
                          <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-success" id="bouton1" onclick="gestioncarte()">Retourner</button>
                          </div>
                        </div>

                  <?php
            }
          }
?>