<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>
	<!--icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
	
	
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
	
	<!-- star rating -->
	<link href="css/star_rating.css" rel="stylesheet">
	
  </head>

  <body class="nav-md">
    <?php include 'menu.php'; ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

                        <div class="row">
              <!-- form input mask -->
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ajouter un nouveau produit</h2>
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
                    <br />
					

					<form class="form-horizontal form-label-left"  method="GET"  action="modifier_Produit.php">
                      <input type="hidden" name="id_produit" value="<?php echo (isset($id_produit))?$id_produit:'';?>" >
					  <input type="hidden" name="date_creation" value="<?php echo (isset($date_creation))?$date_creation:'';?>">
					  <input type="hidden" name="date_vente" value="<?php echo (isset($date_vente))?$date_vente:'';?>">
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Caractéristiques</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" placeholder="Caractéristiques" name="caracteristiques" value="<?php echo (isset($caracteristiques))?$caracteristiques:'';?>" class="form-control" data-inputmask="'mask': '99/99/9999'" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Prix</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" placeholder="Prix unitaire" name="prix" value="<?php echo (isset($prix))?$prix:'';?>" class="form-control" data-inputmask="'mask': '99/99/9999'" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					  
                      
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Marque</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" placeholder="Marque" name="marque" value="<?php echo (isset($marque))?$marque:'';?>" class="form-control" data-inputmask="'mask': '99/99/9999'" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Sexe</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
							<p>
								Homme 
								<input type="radio" class="flat" name="sexe" id="genderM" value="M" /> 
								Femme 
								<input type="radio" class="flat" name="sexe" id="genderF" value="F" />
								Enfant 
								<input type="radio" class="flat" name="sexe" id="genderE" value="E" />
							 </p>
                        </div>
                      </div>
<script>
var sexe="<?php echo $sexe; ?>";
if(sexe==="M")document.getElementById("genderM").checked = true;
else if (sexe==="F")document.getElementById("genderF").checked = true;
else document.getElementById("genderE").checked = true;
</script>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Formes</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
							<p>
								Aviator 
								<input type="radio" class="flat" name="forme" id="FormesA" value="A" checked=""  /> 
								Circulaire 
								<input type="radio" class="flat" name="forme" id="FormesC" value="C" />
								Echancré 
								<input type="radio" class="flat" name="forme" id="FormesE" value="E" />
								Rectangulaires 
								<input type="radio" class="flat" name="forme" id="FormesR" value="R" />
							 </p>
                        </div>
                      </div>
<script>
var forme="<?php echo $forme; ?>";
if(forme==="A")document.getElementById("FormesA").checked = true;
else if (forme==="C")document.getElementById("FormesC").checked = true;
else if (forme==="E")document.getElementById("FormesE").checked = true;
else document.getElementById("FormesR").checked = true;
</script>
					  <div class="ln_solid"></div>
					  
					  <div class="input-group">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-3">image</label>
								<div class="col-md-9 col-sm-9 col-xs-9">
									  <input type="text" name="image" value="<?php echo (isset($image))?$image:'';?>" class="form-control" placeholder="url de l'image">
											<span class="input-group-btn">
															  <button type="button" class="btn btn-primary">ajouter image</button>
														  </span>	
								</div>
								
							</div>
                      </div>
					  
					  
						  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" for="date">Date expiration</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
						    <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_2 xdisplay"><div class="calendar left single" style="display: block;"><div class="daterangepicker_input"><input class="input-mini form-control active" type="text" name="daterangepicker_start" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th><th colspan="5" class="month">Oct 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">25</td><td class="off available" data-title="r0c1">26</td><td class="off available" data-title="r0c2">27</td><td class="off available" data-title="r0c3">28</td><td class="off available" data-title="r0c4">29</td><td class="off available" data-title="r0c5">30</td><td class="weekend available" data-title="r0c6">1</td></tr><tr><td class="weekend available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="weekend available" data-title="r1c6">8</td></tr><tr><td class="weekend available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="weekend available" data-title="r2c6">15</td></tr><tr><td class="weekend available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="today active start-date active end-date available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="weekend available" data-title="r3c6">22</td></tr><tr><td class="weekend available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="weekend available" data-title="r4c6">29</td></tr><tr><td class="weekend available" data-title="r5c0">30</td><td class="available" data-title="r5c1">31</td><td class="off available" data-title="r5c2">1</td><td class="off available" data-title="r5c3">2</td><td class="off available" data-title="r5c4">3</td><td class="off available" data-title="r5c5">4</td><td class="weekend off available" data-title="r5c6">5</td></tr></tbody></table></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Nov 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">30</td><td class="off available" data-title="r0c1">31</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="weekend available" data-title="r0c6">5</td></tr><tr><td class="weekend available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="weekend available" data-title="r1c6">12</td></tr><tr><td class="weekend available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr><td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td><td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr><td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td><td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td><td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td><td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>
						    <fieldset>
							  <div class="control-group">
								<div class="controls">
								  <div class="col-md-11 xdisplay_inputx form-group has-feedback">
							<input class="form-control has-feedback-left" id="single_cal2" name="date_expiration" value="<?php echo (isset($date_expiration))?$date_expiration:'';?>" placeholder="MM/DD/YYYY" type="text" aria-describedby="inputSuccess2Status2"/>
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
									<span id="inputSuccess2Status2" class="sr-only">(success)</span>
								  </div>
								</div>
							  </div>
							</fieldset>
						</div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">categorie</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select name="id_categorie" class="form-control" required>
                            <?php 
                            include "../Core/CategorieC.php";
                            $Categoriec = new CategorieC();
                            
                            ?>   
                            
                            <?php 
                            $tab2 = $Categoriec->afficher();
                            foreach($tab2 as $row2)
                            { 
                            ?>
                            <option value="<?php echo $row2['id_categorie']; ?>"><?php echo $row2['titre']; ?></option> 
                            <?php 
                            } 
                            ?>   
                          </select>
                          <!--<input type="text" placeholder="catégorie" name="id_categorie" class="form-control" value="<?php echo (isset($id_categorie))?$id_categorie:'';?>" data-inputmask="'mask': '99/99/9999'" required>-->
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Note</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
							  <div class="star-rating">
								<span class="fa fa-star-o" data-rating="1"></span>
								<span class="fa fa-star-o" data-rating="2"></span>
								<span class="fa fa-star-o" data-rating="3"></span>
								<span class="fa fa-star-o" data-rating="4"></span>
								<span class="fa fa-star-o" data-rating="5"></span>
								<input type="hidden" name="note" class="rating-value" value="<?php echo (isset($note))?$note:'';?>">
							  </div>
							</div>
					  </div>
					
					  
					  
					  
					  
					  
					  

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success" onclick="modif();">Modifier</button>
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

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
	<!-- stars animation -->
    <script src="js/stars.js"></script>
  </body>
</html>