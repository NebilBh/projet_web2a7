<?php
  include "../../core/Clientc.php";
          if(isset($_GET['id']) && isset($_GET['nbpoints']))
          {
            $id=$_GET['id'];
            $nbpoints=$_GET['nbpoints'];

            if(!empty($_GET['id']) && !empty($_GET['nbpoints']))
            {
                $carteC = new CarteC();
                $mes=$carteC->modifierCarte($id,$nbpoints);

                if($mes)
                {
                    header("Location: http://localhost:1234/crudclient/views/backsite/gestioncarte.php");
                    exit;
                }
                else
                {
                    ?>
                    <script type="text/javascript">
                    alert("La carte n'existe pas");
                    window.history.back();
                    </script>
                    <?php
                }
            }
          }
?>