<?php
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 22/03/2018
 * Time: 01:02
 */

class LigneCommande
{
    protected $id;
    protected $id_commande;
    protected $id_produit;
    protected $quantite;

    /**
     * LigneCommande constructor.
     * @param $id
     * @param $id_commande
     * @param $id_produit
     * @param $quantite
     */
    public function __construct($id_commande, $id_produit, $quantite)
    {
        $this->id_commande = $id_commande;
        $this->id_produit = $id_produit;
        $this->quantite = $quantite;
    }

    /**
     * LigneCommande constructor.
     * @param $id
     * @param $id_commande
     * @param $id_produit
     * @param $quantite
     */
    public function AjouterLigneCommande()
    {
        $pdo=Config::getConnexion();
        $sql="INSERT INTO lignecommande(ID_COMMANDE,ID_PRODUIT,QUANTITE) VALUES (:idcommande,:idproduit,:quantite)";
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':idcommande',$this->id_commande);
            $stmt->bindParam(':idproduit',$this->id_produit);
            $stmt->bindParam(':quantite',$this->quantite);
            $stmt->execute();
        }
    }



}