<?php
  class config
  {
    private static $instance = NULL;

    public static function getConnexion()
    {
      if (!isset(self::$instance)) 
      {
    		try
        {
            self::$instance = new PDO('mysql:host=localhost;dbname=projet_web', 'root', 'monkeybrain');
    		    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        catch(Exception $e)
        {
          echo "erruer db";
           die('Erreur: '.$e->getMessage());
        }
      }

      return self::$instance;
    }
  }
?>