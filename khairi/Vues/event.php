<?php
   include"notification.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>
    

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/firas.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>M.Firas Belhiba</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                 
                 
                  <li><a><i class="fa fa-marketing"></i> Marketing <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="event.php">Event</a></li>
                      <li><a href="sponsors.php">Sponsoring</a></li>
                       <li><a href="test.php">Publicite</a></li>
                    </ul>
                  </li>
                  
                 
                  
                  
                </ul>
              </div>
              <div class="menu_section">
                
                  
                                    
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/firas.png" alt="">M.Firas Belhiba
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                  <?php
    $query = "SElECT * From event";
  if(count(fetchAll($query))>0);
  {


    ?>
                    <span class="badge bg-green">
                      <?php echo count(fetchAll($query)); ?>
                    </span>
                    <?php
                }
                    ?>
                  </a>
                    <span class="badge bg-green"></span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                     <?php
                                                                     foreach(fetchAll($query) as $i){
                ?> 
                    <li>
                      <a>
                        <span class="image"><img src="images/firas.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Votre formulaire a été sauvegarder avec succés 
                        </span>
                      </a>
                    </li>
                 <?php
                }
                    ?>
                    <!--<li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>-->
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
    
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Events <small>Set your event</small></h3>
              </div>
              <form method="POST" action="ajouterevent.php"  onsubmit="return validation()">
<table class="table table-bordered table-striped" >
<tr>
<td>Identifiant</td>
<td><input type="number" name="nom" id="nom" placeholder="tapez l'Identifiant de l'evenement"  autocomplete="off" required><span id="nomm" class="text-danger font-weight-bold"></span></td>
<span class="resultat"></span>
</tr>
<tr>
<td>dated</td>
<td><input type="date" name="dated"></td>
</tr>
<tr>
<td>datef</td>
<td><input type="date" name="datef"></td>
</tr>
<tr>
<td>lieu</td>
<td><input type="text" name="lieu" min="0" max="10" placeholder="tapez le lieu de l'evenement" pattern="[A-Za-z]{1,}" required></td>
</tr>
<tr>
<td>type</td>
<td><input type="text" name="type" placeholder="tapez le type de l'evenement" pattern="[A-Za-z]{1,}" required></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="ajouter" value="ajouter" autocomplete="off" required></td>
<p> <a href="cv.php">Afficher<a/></p>
</tr>
</table>
</form>
              </div>
            </div>
          </div>
          
          
    

        <!-- /page content -->

        <!-- footer content -->
        
        <!-- /footer content -->
  

    <!-- jQuery -->
    <script src="js/controledesaisie.js"></script>
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script type="text/javascript">
    function validation()

{
var nom=parseInt(document.getElementById('nom').value);

if (nom =="") {


  document.getElementById('nomm').innerHTML="seuelement les nombres";
  return false;
}

if (isNaN(nom)) {


  document.getElementById('nomm').innerHTML="s'il vous plait entrer votre identifiant";
  return false;


}
if (nom<0) {


  document.getElementById('nomm').innerHTML="les nombres doit etre positif";
  return false;
}



}






</script>
  </body>
</html>