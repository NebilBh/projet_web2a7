<?php
include "../config.php";
include "afficher_Categorie.php";
?>




<?php include "header.php"; ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
			
	
			
			
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
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Titre</th>
                          <th>Description</th>                    
                        </tr>
                      </thead>
 

                      <tbody>
<!-- integration de la bdd -->
					<?php foreach($tab as $row)
						{ ?>
							<tr>
								<td><?php echo $row['id_categorie']; ?></td>
								<td><?php echo $row['titre']; ?></td>
								<td><?php echo $row['description']; ?></td>
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