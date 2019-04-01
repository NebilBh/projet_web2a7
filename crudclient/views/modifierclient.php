<?php
include "../core/Clientc.php";
	session_start();
	$emailold = $_SESSION['var'];

if(isset($_GET['emaillogin']) && isset($_GET['passwordlogin']))
{
	$email=$_GET['emaillogin'];
	$password=$_GET['passwordlogin'];

	if(!empty($_GET['emaillogin']) && !empty($_GET['passwordlogin']))
	{
		$clientC = new ClientC();

		$mes=$clientC->modifier($emailold,$email,$password);

                if($mes)
                {
                	$_SESSION['var'] = $email;
                    header("Location: http://localhost:1234/crudclient/views/frontsite/index.php");
                    exit;
                }
				else
				{
					?>
					<script type="text/javascript">
					alert("L'adresse e-mail existe déjà");
					window.history.back();
					</script>
					<?php
				}
	}
}