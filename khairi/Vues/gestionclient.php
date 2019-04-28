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
    <link href="css/bouton1.css" rel="stylesheet">
	
	
	
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
                    <td class="firstline">Nom</td>
                    <td class="firstline">Prénom</td>
                    <td class="firstline">Email</td>
                    <td class="firstline">Date de naissance</td>
                    <td class="firstline">Mot de passe</td>
                    <td class="firstline">Téléphone</td>
                    <td class="firstline">ID de la carte</td>
                </tr>

			      <?php
            include "../config.php";
              include "../core/Clientc.php";
              $clientC = new ClientC();

              $temp = $clientC->afficher();
              $data = $temp->fetchAll();

              foreach ($data as $row) 
              {
                  ?>
                  <tr>
                    <td><?php echo $row['LastName'];?></td>
                    <td><?php echo $row['FirstName'];?></td>
                    <td><?php echo $row['Email'];?></td>
                    <td><?php echo $row['DateOfBirth'];?></td>
                    <td><?php echo $row['Password'];?></td>
                    <td><?php echo $row['Telephone'];?></td>
                    <td><?php echo $row['CardID'];?></td>
                  </tr>
              <?php
              }
              ?>
              </table>
                      <form action="mailauto.php">
                        <div class="form-group">
                          <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-success" id="bouton1">Envoyer un email d'anniversaire</button>
                          </div>
                        </div>
                      </form>

            <br><br>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Rechercher un client</h2>
                      <div class="clearfix"></div>
                  </div>
                    <div class="x_content">   

              <form class="form-horizontal form-label-left" method="GET" action="rechercherclient.php">
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

            <br><br>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Supprimer un client <small>par son email</small></h2>
                      <div class="clearfix"></div>
                  </div>
                    <div class="x_content">   

            <form class="form-horizontal form-label-left" method="GET" action="supprimerclient.php">
              <div class="form-group">
                        <label class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-9">
                            <div class="input-group">
                              <input type="email" class="form-control" placeholder="exemple@gmail.com" required="required" name="email" onchange="onchange();"
                                     onkeyup="this.onchange();" onpaste="this.onchange();" oninput="this.onchange();">
                            </div>
                          </div>
              </div>
 
                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Supprimer</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            <div class="clearfix"></div>

            <br><br>

          <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                <div class="x_title">
                        <h2>Les clients les plus fidèles</h2>
                          <div class="clearfix"></div>
                      </div>
                    <div class="x_content"> 
              <table id="datatable" class="table table-striped table-bordered">
                <tr>
                    <td class="firstline">Nom</td>
                    <td class="firstline">Prénom</td>
                    <td class="firstline">Points</td>
                </tr>

            <?php
              $carteC = new CarteC();

              $temp = $carteC->topfive();
              $data = $temp->fetchAll();

              $i=0;

              foreach ($data as $row) 
              {
                  $z=$row['Points'];
                  $top[$i]=$z;
                  $i++;
                  ?>
                  <tr>
                    <td><?php echo $row['LastName'];?></td>
                    <td><?php echo $row['FirstName'];?></td>
                    <td><?php echo $row['Points'];?></td>
                  </tr>
              <?php
              }
              ?>
              </table>
              <div class="clearfix"></div>

             <br><br>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Les clients les plus fidèles</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#" onclick="stat_note();">Fidélité</a>
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

    <!-- ECharts -->
    <script src="js/echarts.min.js"></script>

    <script type="text/javascript">
var titre ;
var nb_parametres = 5;
var nameList = [
        '0', '1', '2', '3', '4'
    ];
var valueList = [
        10, 11, 12, 13, 14
    ];


function stat_note()
{
  titre = 'Fidélité';
  var note_0 = "<?php echo $top[0]; ?>";
  var note_1 = "<?php echo $top[1]; ?>";
  var note_2 = "<?php echo $top[2]; ?>";
  var note_3 = "<?php echo $top[3]; ?>";
  var note_4 = "<?php echo $top[4]; ?>";
  nb_parametres = 5;
  nameList = [
        'Premier','Deuxième', 'Troisième', 'Quatrième', 'Cinquième'
    ];
  valueList = [
        parseInt(note_0, 10),parseInt(note_1, 10),parseInt(note_2, 10),parseInt(note_3, 10),parseInt(note_4, 10)
    ];
  init_stat();
}



function init_stat()
{
  var dom = document.getElementById("container");
  var myChart = echarts.init(dom);
  var app = {};
  option = null;
  var data = genData(nb_parametres);

  option = {
    title : {
      text: titre, //: 'nadhir'
      subtext: titre,
      x:'center'
    },
    tooltip : {
      trigger: 'item',
      formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
      type: 'scroll',
      orient: 'vertical',
      right: 10,
      top: 20,
      bottom: 20,
      data: data.legendData,

      selected: data.selected
    },
    series : [
      {
        name: titre,
        type: 'pie',
        radius : '55%',
        center: ['40%', '50%'],
        data: data.seriesData,
        itemStyle: {
          emphasis: {
            shadowBlur: 10,
            shadowOffsetX: 0,
            shadowColor: 'rgba(0, 0, 0, 0.5)'
          }
        }
      }
    ]
  };




  function genData( ) {
    var legendData = [];
    var seriesData = [];
    var selected = {};
    for (var i = 0; i < nb_parametres; i++) {
      legendData.push(nameList[i]);
      seriesData.push({
        name: nameList[i],
        value: valueList[i]
      });
      selected[nameList[i]] = i < 6;
    }

    return {
      legendData: legendData,
      seriesData: seriesData,
      selected: selected
    };

  }
  ;
  if (option && typeof option === "object") {
    myChart.setOption(option, true);
  }

}
</script>

  <script>stat_note();</script> 
	
  </body>
</html>