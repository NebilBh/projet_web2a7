<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>AfricOptic</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">

    <!--nav menu-->
      

       
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Offre</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Formulaire</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  
                    <?php
                    include_once( "../../Core/offresC.php");
                    if(isset($_GET['id']))
                    {

                      $offre=new offreC();
          					  $result=$offre->chercher('id',$_GET['id']);
          						foreach($result as $row){

              						$id=$row['id'];
              						$idAdmin=$row['idAdmin'];
              						$article=$row['article'];
              						$articleOff =$row['articleOff'];
              						$qte=$row['qte'];
              						$dateD=$row['dateD'];
              						$dateF=$row['dateF'];
              						$duree =$dateD.' / '.$dateF;
          						?>
                    
                          <form id="demo-form1" data-parsley-validate class="form-horizontal form-label-left" method ="get">
                            <!--identifiant-->
                            <input type ="hidden" name ="idInt" value = "<?php echo $id?>">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id">Admin  <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" class="form-control has-feedback-left"  required="required" name="idAdmin" value = "<?php echo $idAdmin?>">
                                  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputSuccess2">Article  <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Carrera 6XXX" required="required" name = "article" value = "<?php echo $article ?>">
                                  <span class="fa fa-search form-control-feedback left" aria-hidden="true"></span>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Article Offert <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Carrera 6XXX" required="required" name = "articleOff" value = "<?php echo $articleOff ?>">
                                  <span class="fa fa-tag form-control-feedback left" aria-hidden="true"></span>
                                </div>
                              </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Quantité <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="number" class="form-control col-md-7 col-xs-12"   required="required" name ="qte" value = "<?php echo $qte?>">
                                </div>
                              </div>
                              
                              <div class="form-group">
                              
                                <label for="reservation" class="control-label col-md-3 col-sm-3 col-xs-12">Durée <span class ="required">*</span>
                                </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <div class="input-prepend input-group">
                                        <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                        <input type="text" style="width: 200px" id="reservation" required="required"  class="form-control" placeholder="mm/jj/aaaa -mm/jj/aaaa" name = "duree">
                                      </div>
                                    </div>
                            </div>


		                      <div class="form-group">
		                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
		                          
            					  
		                          <button type="submit" class="btn btn-success" name ="modifier">Confirmer</button>
		                        </div>
		                      </div>
		                    </form>
		                    <a class ="btn btn-primary "href="afficher.php">Annuler</a>
                    </div>
                   
                     <div class="ln_solid"></div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          
        
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Site web créé par The pioneers 
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      
    

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

     <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
	
<?php 
}
} 
if (isset($_GET['modifier']))
{

	$duree = $_GET['duree'];
	extraire_date($dateD,$dateF,$duree);

	$offre =new offre($_GET['idInt'],$_GET['idAdmin'],$_GET['article'],$_GET['articleOff'],$_GET['qte'],$dateD,$dateF);
	$offreC = new offreC();

	
  	if($offreC->modifier($offre) )
  	{
      header('location:afficher.php');
    
  	    
  	}
}
function GoToNow($url)
{
  echo '<script language="javascript">windows.location.href ="'.$url.'"</script>';
}
function extraire_date(&$dateD,&$dateF,$duree)
{
	$dateD = substr($duree,0,10);
	$dateF = substr($duree,13);

	$dateF=date("Y-m-d", strtotime($dateF));
	$dateD=date("Y-m-d", strtotime($dateD));
}


?>
</body>
</html>