<?php
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 22/03/2018
 * Time: 01:58
 */


include '../entities/Commande.php';
class CommandeCore extends Commande
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

    public function SupprimerCommande($id)
    {
        $pdo=Config::getConnexion();
        $sql='DELETE FROM `commande` WHERE ID=:id';
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':id',$id);
            $stmt->execute();
        }
    }

    public function ModifierCommande($c)
    {
        $pdo=Config::getConnexion();
        $sql='UPDATE `commande` SET `user`=:user,`totale`=:totale,`MP`=:mp WHERE `ID`=:id';
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':user',$c->user);
            $stmt->bindParam(':totale',$c->totale);
            $stmt->bindParam(':mp',$c->mp);
            $stmt->bindParam(':id',$c->id);
            $stmt->execute();
        }

    }
    public function AfficherCommande()
    {
        $db = config::getConnexion();//config.php
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

}