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
    public function __construct($id,$user,$totale)
    {
        $this->id=$id;
        $this->user = $user;
        $this->totale = $totale;
    }

   

    public function lastid()
    {
        $pdo=Config::getConnexion();
        $totale=0;
        $user=12;
        $sql='SELECT ID FROM `commande` WHERE (user=:user AND totale=:totale)';
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(':user',$user);
        $stmt->bindParam(':totale',$totale);
        $stmt->execute();
        $idc=$stmt->fetch();
        //var_dump($idc);
        return $idc['ID'];
    }

    
   public function get_id()
        {
            return $this->id;
        }
        
        public function get_user()
        {
            return $this->user;
        }
        
        public function get_totale()
        {
            return $this->totale;
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