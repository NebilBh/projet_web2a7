<?php
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 22/03/2018
 * Time: 01:58
 */


include '../Entities/Commande.php';
include "../config.php";
class CommandeCore 
{
    public function AjouterCommande($c)
    {
        $pdo=Config::getConnexion();
        $sql='INSERT INTO `commande`( `user`, `totale`) VALUES (:user,:totale)';
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':user',$c->user);
            $stmt->bindParam(':totale',$c->totale);
            $stmt->execute();
        }
    }

 function supprimer($colonne,$valeur)
    {
        $db = config::getConnexion();//config.php
        $sql="delete from commande where(".$colonne."=".$valeur.")";
        
        try{
            
            $req = $db->prepare($sql);
            $req->execute();
            return true;
        }
        catch(Exeption $e)
        {
            echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
            return false;
        }
    }
  function modifier($Commande)
    {
        $db = config::getConnexion();//config.php
        $sql='UPDATE commande set user = :user ,totale = :totale WHERE (id=:id)';

        
        try{
            $req = $db->prepare($sql);
           
            $req->bindParam(':user', $Commande->get_user(), PDO::PARAM_STR); 
            $req->bindParam(':totale', $Commande->get_totale(), PDO::PARAM_STR); 
            $req->bindParam(':id', $Commande->get_id(), PDO::PARAM_STR);
            $req->execute();

            return true;
        }
        catch(Exeption $e)
        {
            echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
        }
    }

    public function AfficherCommande()
    {
        $db = Config::getConnexion();//config.php
        $sql="select * from commande";
        
        try{
            $tab = $db->query($sql);
            return $tab;
        }
        catch(Exeption $e)
        {
            echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
        }
    }

    function chercher($colonne,$valeur)
    {
        $db = config::getConnexion();//config.php
        $sql="select * from commande where(".$colonne."=".$valeur.")";
        
        try{
            $tab = $db->query($sql);
            return $tab;
        }
        catch(Exeption $e)
        {
            echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
        }
    }

}