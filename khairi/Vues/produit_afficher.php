<?php
include "afficher_Produit.php";
?>




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
	
	
	
	<!-- bootstrap-daterangepicker -->
    <link href="css/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
   
	
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
    <?php include 'menu.php'; ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
			
<!-- debut chart-->		
			<div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pie Graph Chart <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#" onclick="stat_sexe();">Sexe</a>
                          </li>
                          <li><a href="#" onclick="stat_note();">Note</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="container" style="width: 100%; height: 300px"></div>
					
                  </div>
                </div>
              </div>
			  
		<div id='myChart'></div>



       


<!--include php-->
		
			
<!-- fin chart-->	
	
			
			
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Default Example <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>
					<form class="form-horizontal form-label-left" method="GET" action="exporter_pdf.php">
						<button type="submit" class="btn btn-success" name="exporter">Exporter PDF</button>
					</form>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Caracteristiques</th>
                          <th>Prix</th>
                          <th>Marque</th>
                          <th>Date de creation</th>
                          <th>Date d'expiration</th>
						  <th>Sexe</th>
                          <th>Forme</th>
                          <th>Note</th>
                          <th>Categorie</th>
                          <th>Image</th>
                          <th>Date de Vente</th>
                          <th>Supprimer</th>
                          <th>Modifier</th>
                        </tr>
                      </thead>
 

                      <tbody>
<!-- integration de la bdd -->
					<?php foreach($tab as $row)
						{ ?>
							<tr>
								<td><?php echo $row['id_produit']; ?></td>
								<td><?php echo $row['caracteristiques']; ?></td>
								<td><?php echo $row['prix']; ?></td>
								<td><?php echo $row['Marque']; ?></td>
								<td><?php echo $row['date_creation']; ?></td>
								<td><?php echo $row['date_expiration']; ?></td>
								<td><?php echo $row['sexe']; ?></td>
								<td><?php echo $row['forme']; ?></td>
								<td><?php echo $row['note']; ?></td>
								<td><?php echo $row['id_categorie']; ?></td>
								<td><a href="images/<?php echo $row['image']; ?>"><?php echo $row['image']; ?></a></td>
								<td><?php echo $row['date_vente']; ?></td>
                <td>
                  <form method="GET" action="supprimer_Produit.php">
                    <input type="submit" value="supprimer">
                    <input type="hidden" name="recherche" value="<?PHP echo $row['id_produit'];  ?>">
                  </form>
                </td>
                <td>
                  <form method="GET" action="chercher_Produit.php">
                    <input type="submit" value="modifier">
                    <input type="hidden" name="recherche" value="<?PHP echo $row['id_produit'];  ?>">
                  </form>
                </td>
							</tr>
					<?php } ?>
                        
						
						
						
						
						
						
						
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

			

            <div class="clearfix"></div>
                        
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
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
    <!-- ECharts -->
    <script src="js/echarts.min.js"></script>
	<!--<script src="js/stat_produit.js"></script>-->
	<script>stat_sexe();</script>	
	
  </body>
</html>