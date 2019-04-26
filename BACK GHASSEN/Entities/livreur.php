<?php
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 22/03/2018
 * Time: 01:03
 */

class livreur
{
    protected $id_livreur;
    protected $nom_livreur;
    protected $prenom_livreur;
        protected $date_naissance;
    protected $zone;
    protected $disponibilite;


    /**
     * Commande constructor.
     * @param $id
     * @param $user
     * @param $totale
     * @param $mp
     */
    public function __construct($id_livreur,$nom_livreur,$prenom_livreur,$date_naissance,$zone,$disponibilite)
    {
        $this->id_livreur=$id_livreur;
        $this->nom_livreur = $nom_livreur;
        $this->prenom_livreur = $prenom_livreur;
        $this->date_naissance = $date_naissance;
        $this->zone = $zone;
        $this->disponibilite = $disponibilite;


    }

   
public function get_id_livreur()
        {
            return $this->id_livreur;
        }
        
        public function get_nom_livreur()
        {
            return $this->nom_livreur;
        }
        
        public function get_prenom_livreur()
        {
            return $this->prenom_livreur;
        }
  public function get_date_naissance()
        {
            return $this->date_naissance;
        }
  public function get_zone_travail()
        {
            return $this->zone;
        }
  public function get_image()
        {
            return $this->image;
        } 
public function get_disponibilite()
        {
            return $this->disponibilite;
        }













    function mailing($d)
    {
        require '../PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer();
        $mail->IsSmtp();
        $mail->SMTPAuth = true;
        $mail->Debugoutput='html';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 25;
        $mail->isHTML(true);
        $mail->Username = "123.traduire@gmail.com";
        $mail->Password = "123456nadim";
        $mail->setFrom("123.traduire@gmail.com");
        $mail->Subject = "PHPMailer SMTP options test";
        $mail->Body="Votre commande a été valider .";
        $mail->AddAttachment("fichier".$_FILES[fichier]['name']);
        $mail->AltBody ="Bonjour";
        $mail->AddAddress($d);
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        if (!$mail->send()) {
        } else {
            echo "<script>window.location.href='https://mail.google.com/mail/';</script>";
        }
    }


}