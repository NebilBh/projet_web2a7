<?PHP 
        session_start();
        $_SESSION['login'] ='nebil';
        $_SESSION['pwd'] = '123';
        $_SESSION ['role'] = '1';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentelella</title>

    <!-- Bootstrap -->
    <link href ="css/autocomplete.css" rel = "stylesheet">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
        <?php include("menu.php"); ?>

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Catalogues</small></h3>
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
                    <h2>Soldes</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                    
                  <div class="x_content">
                    

                   
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Identifiant</th>
                          <th>Admin</th>
                          <th>Article</th>
                          <th>Pourcentage</th>
                          <th>Quantité</th>
                          <th>date de Debut</th>
                          <th>date de fin</th>
                          <th>modele</th>
                          <th></th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                          include_once( '../../Core/soldesC.php');
                          $soldes = new SoldeC();
                          if(isset($_GET['modele']))
                          {
                            $qry= $soldes->chercherModele($_GET['modele']);
                          }
                          else
                          {
                          $qry = $soldes->afficher();

                          }
                          $data = $qry->fetchAll();

                          foreach ($data as $row)
                           {
                        ?>
                        <tr>
                          <td><?php echo $row['id']?></td>
                          <td><?php echo $row['idAdmin']?></td>
                          <td><?php echo $row['article']?></td>
                          <td><?php echo $row['pct']?></td>
                          <td><?php echo $row['qte']?></td>
                          <td><?php echo $row['dateD']?></td>
                          <td><?php echo $row['dateF']?></td>
                          <td><?php echo $row['modele']?></td>
                          <td>
                            <?php 
                            if(isset($_SESSION['login']) && isset($_SESSION['pwd']))
                            {
                              if($_SESSION['role'] == '1')
                              {
                            ?>
                            <form method="get" action="supprimer_soldes.php">
                              
                             <input type="submit" name="supprimer" value="supprimer" class="btn btn-danger">
                             <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                             <a class ="btn btn-primary "href="modifier_soldes.php?id=<?PHP echo $row['id']; ?>">Modifier</a>
                           </form> 
                           <?php 
                              }
                            }
                            ?>
                        </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <form class="form-group" method ="get" action = "afficher_soldes.php">
                        <div class="autocomplete" style="width:200px;">
                          <input id="myInput" type="text" name="modele" placeholder="Modele">
                        </div>
                    <input type="submit" class = "btn btn-success" value = "rechercher">
                  </form>

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
    
    <script src = "js/autocomplete.js"></script> 
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Datatables -->
    <script sr="/js/print.js"></script>
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
   
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../vendors/autosize/dist/autosize.min.js"></script>

    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <!--autocomplete-->
    

  </body>
</html>