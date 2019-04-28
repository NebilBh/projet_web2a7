<?php
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 22/03/2018
 * Time: 01:03
 */

class Commande
{
    protected $id;
    protected $user;
    protected $totale;

    /**
     * Commande constructor.
     * @param $id
     * @param $user
     * @param $totale
     * @param $mp
     */
    public function __construct($id,$user, $totale)
    {
        $this->id=$id;
        $this->user = $user;
        $this->totale = $totale;
    }

    public function AjouterCommande()
    {
        $pdo=Config::getConnexion();
        $sql='INSERT INTO `commande`( `user`, `totale`) VALUES (:user,:totale)';
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':user',$this->user);
            $stmt->bindParam(':totale',$this->totale);
            $stmt->execute();
        }
    }

    public function lastid()
    {
        $pdo=Config::getConnexion();
        $totale=0;
        $user=$_SESSION['var'];
        $sql='SELECT ID FROM `commande` WHERE (user=:user AND totale=:totale)';
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(':user',$user);
        $stmt->bindParam(':totale',$totale);
        $stmt->execute();
        $idc=$stmt->fetch();
        //var_dump($idc);
        return $idc['ID'];
    }

    public function ModifierCommande()
    {
        $pdo=Config::getConnexion();
        $sql='UPDATE `commande` SET `user`=:user,`totale`=:totale WHERE `ID`=:id';
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':user',$this->user);
            $stmt->bindParam(':totale',$this->totale);
            $stmt->bindParam(':id',$this->id);
            $stmt->execute();
        }

    }
    


}