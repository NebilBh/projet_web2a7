<?php 
    session_start(); // On démarre la session AVANT toute chose 

    if(isset($_POST['l_login_btn']))
    {

      include('../Core/CompteC.php');

      $connection = false;

      $comptec = new CompteC();
      $tab = $comptec->afficher();
      foreach($tab as $row)
      {
        if($_POST['l_username']==$row['username'] && $_POST['l_pwd']==$row['pwd'])
        {
          $_SESSION['id'] = $row['id']; 
          $_SESSION['email'] = $row['email']; 
          $_SESSION['username'] = $row['username']; 
          $_SESSION['pwd'] = $row['pwd']; 
          header('Location: index.php');
          $connection = true;
        }
      }
      if($connection==false)
      {
        //header('Location: login.php');
        echo "mot de passe ou user name non valide";
      }
    }

    if(isset($_POST['s_signin_btn']))
    {
      include('../Core/CompteC.php');

      $compte = new Compte(1,$_POST['s_email'],$_POST['s_username'],$_POST['s_pwd']);
      $comptec = new CompteC();
      $mes = $comptec->ajouter($compte);
      
      if($mes==false)
      {
        header('Location: login.php');
        echo "mot de passe ou username / adresse mail non valide";
      }
      else
      {
        header('Location: index.php');
      }
    }
  
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" method="POST">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="l_username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="l_pwd" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" name="l_login_btn" value="Log in">
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="" method="POST">
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="s_username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="s_email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="s_pwd" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" name="s_signin_btn">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
