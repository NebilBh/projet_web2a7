<?php
include "../config.php";
  include "../core/Clientc.php";
          if(isset($_GET['email']))
          {
            $email=$_GET['email'];

            if(!empty($_GET['email']))
            {
                $clientC = new ClientC();
                $mes=$clientC->supprimer($email);

                if($mes)
                {
                    header("Location: gestionclient.php");
                    exit;
                }
                else
                {
                    ?>
                    <script type="text/javascript">
                    alert("Adresse e-mail n'existe pas");
                    window.history.back();
                    </script>
                    <?php
                }
            }
          }
?>