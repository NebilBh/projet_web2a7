<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Afric Optic </title>
	  <!--icons -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<!-- bootstrap-daterangepicker -->
    <link href="css/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
  	<!-- TABLEAU ICI!!!-->
    <link href="css/tableau.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/nprogress.css" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="css/custom.min.css" rel="stylesheet">
	
	
	
  </head>

  <body class="nav-md">
    <?php include("menu.php"); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <h1> Bienvenue au dashboard Afric Optic</h1>
              <br><br>
              <table id="datatable" class="table table-striped table-bordered">
                <tr>
                    <td class="firstline">ID de la carte</td>
                    <td class="firstline">Points</td>
                    <td class="firstline">Date de fabrication</td>
                </tr>

			      <?php
              include "../config.php";
              include "../core/Clientc.php";
              $carteC = new CarteC();

              $temp = $carteC->afficherCarte();
              $data = $temp->fetchAll();

              foreach ($data as $row) 
              {
                  ?>
                  <tr>
                    <td><?php echo $row['CardID'];?></td>
                    <td><?php echo $row['Points'];?></td>
                    <td><?php echo $row['FabricationDate'];?></td>
                  </tr>
              <?php
              }
              ?>
              </table>

              <br><br>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Rechercher une carte fidélité</h2>
                      <div class="clearfix"></div>
                  </div>
                    <div class="x_content">   

              <form class="form-horizontal form-label-left" method="GET" action="recherchercarte.php">
              <div class="form-group">
                        <label class="col-sm-3 control-label">Tapez votre recherche ici</label>
                          <div class="col-sm-9">
                            <div class="input-group">
                              <input type="text" class="form-control" required="required" name="rech" onchange="onchange();"
                                     onkeyup="this.onchange();" onpaste="this.onchange();" oninput="this.onchange();">
                            </div>
                          </div>
              </div>
 
                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Rechercher</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            <div class="clearfix"></div>
          </div>              
        </div>  

              <br><br>

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Modifier le nombre de points d'une carte <small>par son ID</small></h2>
                        <div class="clearfix"></div>
                    </div>
                      <div class="x_content">      

              <form class="form-horizontal form-label-left" method="GET" action="modifiercarte.php">
                <div class="form-group">
                          <label class="col-sm-3 control-label">ID</label>
                            <div class="col-sm-9">
                              <div class="input-group">
                                <input type="number" class="form-control" required="required" name="id" onchange="onchange();"
                                       onkeyup="this.onchange();" onpaste="this.onchange();" oninput="this.onchange();">
                              </div>
                            </div>
                </div>

                <div class="form-group">
                          <label class="col-sm-3 control-label">Nombre de points</label>
                            <div class="col-sm-9">
                              <div class="input-group">
                                <input type="number" class="form-control" required="required" name="nbpoints" onchange="onchange();"
                                       onkeyup="this.onchange();" onpaste="this.onchange();" oninput="this.onchange();">
                              </div>
                            </div>
                </div>
   
                        <div class="form-group">
                          <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Modifier</button>
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>
                </div>

            <div class="clearfix"></div>
          </div>              
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="js/nprogress.js"></script>
	<!-- tableau : recherche... -->
	<script src="js/jquery.dataTables.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
	<!-- Chart.js -->
    <script src="js/Chart.min.js"></script>
	
  </body>
</html>