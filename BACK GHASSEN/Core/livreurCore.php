<?php
include "../config.php";
include "../Entities/livreur.php";

class livreurC
{
    function ajouter($livreur)
    {
        $db = config::getConnexion();//config.php
        $sql='INSERT into livreur (id_livreur,nom_livreur,prenom_livreur,date_naissance,zone_travail,disponibilite) VALUES (:id_livreur,:nom_livreur,:prenom_livreur,:date_naissance,:zone_travail,:disponibilite)';
        
        try{
            //$id_produit = $Produit->get_id_produit();
            $id_livreur = $livreur->get_id_livreur();
            $nom_livreur = $livreur->get_nom_livreur();
            $prenom_livreur = $livreur->get_prenom_livreur();
            $date_naissance = $livreur->get_date_naissance();
            $zone_travail = $livreur->get_zone_travail();
            $disponiblite = $livreur->get_disponibilite();
            $req = $db->prepare($sql);
            //$req->bindValue(':id_livreur',$id_livreur);
            $req->bindValue(':id_livreur',$id_livreur);
            $req->bindValue(':nom_livreur',$nom_livreur);
            $req->bindValue(':prenom_livreur',$prenom_livreur);
            $req->bindValue(':date_naissance',$date_naissance);
            $req->bindValue(':zone_travail',$zone_travail);
            $req->bindValue(':disponibilite',$disponiblite);
            $req->execute();
            return true;
        }
        catch(Exeption $e)
        {
            echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
            return false;
        }
    
    }
    
    function afficher()
    {
        $db = config::getConnexion();//config.php
        $sql="select * from livreur";
        
        try{
            $tab = $db->query($sql);
            return $tab;
        }
        catch(Exeption $e)
        {
            echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
        }
    }
    
    function chercher_stat($colonne,$valeur)
    {
        $db = config::getConnexion();//config.php
        $sql="select * from livreur where(".$colonne."=".$valeur.")";
        
        try{
            $tab = $db->query($sql);
            $longeur = 0;
            foreach($tab as $row)$longeur++;
            return $longeur;
        }
        catch(Exeption $e)
        {
            echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
        }
    }
    
    function supprimer($colonne,$valeur)
    {
        $db = config::getConnexion();//config.php
        $sql="delete from livreur where(".$colonne."=".$valeur.")";
        
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

    function chercher($colonne,$valeur)
    {
        $db = config::getConnexion();//config.php
        $sql="select * from livreur where(".$colonne."=".$valeur.")";
        
        try{
            $tab = $db->query($sql);
            return $tab;
        }
        catch(Exeption $e)
        {
            echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
        }
    }
    
    function modifier($livreur)
    {
        $db = config::getConnexion();//config.php
        $sql="update livreur set nom_livreur = :nom_livreur ,prenom_livreur = :prenom_livreur ,date_naissance = :date_naissance ,zone_travail=".
        ":zone_travail ,disponibilite = :disponibilite  where id_livreur = :id_livreur";
        
        try{  $id_livreur = $livreur->get_id_livreur();
            $nom_livreur = $livreur->get_nom_livreur();
            $prenom_livreur = $livreur->get_prenom_livreur();
            $date_naissance = $livreur->get_date_naissance();
            $zone_travail = $livreur->get_zone_travail();
            $disponibilite = $livreur->get_disponibilite();

 $req = $db->prepare($sql);
            $req->bindParam(':nom_livreur', $nom_livreur, PDO::PARAM_STR);
            $req->bindParam(':prenom_livreur', $prenom_livreur, PDO::PARAM_STR); 
            $req->bindParam(':date_naissance', $date_naissance, PDO::PARAM_STR); 
            $req->bindParam(':zone_travail', $zone_travail, PDO::PARAM_STR); 
            $req->bindParam(':disponibilite', $disponibilite, PDO::PARAM_STR); 
            $req->bindParam(':id_livreur', $id_livreur, PDO::PARAM_STR); 
            $req->execute();

            return true;
        }
        catch(Exeption $e)
        {
            echo 'erreur' .$e->getMessage();//.$e pour la concatination ' ' .
        }
    }
    
   
    
    
}
    
?>