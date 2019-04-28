<?php
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 22/03/2018
 * Time: 01:09
 */
include '../Entities/LigneCommande.php';

class LigneCommandeCore extends LigneCommande
{
    public function AjouterLigneCommande($lc)
    {
        $pdo=Config::getConnexion();
        $sql="INSERT INTO `lignecommande`(ID_COMMANDE`, `ID_PRODUIT`, `QUANTITE`) VALUES (:idcommande,:idproduit,:quantite)";
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':id_commande',$lc->id_commande);
            $stmt->bindParam(':id_produit',$lc->id_produit);
            $stmt->bindParam(':quantite',$lc->quantite);
            $stmt->execute();
        }
    }

    public function SupprimerLigneCommande($id)
    {
        $pdo=Config::getConnexion();
        $sql='DELETE FROM `lignecommande` WHERE ID=:id';
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':id',$id);
            $stmt->execute();
        }
    }

    public function ModifierLigneCommande($lc)
    {
        $pdo=Config::getConnexion();
        $sql='UPDATE `lignecommande` SET `ID_COMMANDE`=:id_commande,`ID_PRODUIT`=:id_produit,`QUANTITE`=:quantite WHERE ID=:id';
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':id_commande',$lc->id_commande,PDO::PARAM_INT);
            $stmt->bindParam(':id_produit',$lc->id_produit,PDO::PARAM_INT);
            $stmt->bindParam(':qunatite',$lc->quantite,PDO::PARAM_INT);
            $stmt->bindParam(':id',$lc->id,PDO::PARAM_INT);
            $stmt->execute();
        }

    }
}
?>