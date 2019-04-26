<?php include "header.php"; ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Supprimer un produit <small>par son identifiant </small></h2>
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
                  
				  
				  <form class="form-horizontal form-label-left" method="GET" action="supprimer_Categorie.php">
				  
				  
				  <div class="form-group">
                        <label class="col-sm-3 control-label">Identifiant categorie</label>

                        <div class="col-sm-9">
                          
                          <div class="input-group">
                            <input type="text" class="form-control" name="recherche" onchange="onchange();"
onkeyup="this.onchange();" onpaste="this.onchange();" oninput="this.onchange();">
                            <span class="input-group-btn">
                                              <select class="form-control">
												<option>id categorie</option>
												<option>titre</option>
											  </select>
                                          </span>
                          </div>
                        </div>
                      </div>
                      <!--<div class="divider-dashed"></div>-->
				  
				  
				  
				  
			  <!--<div class="ln_solid"></div>-->

                      
					  
					
					
					
					
					
					
					 
					  

					  
					  

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Supprimer</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              <!-- /form input mask -->


              

            </div>

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
  </body>
</html>