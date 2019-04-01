<?PHP
class Reclamation{
	
	private $code;
	private $nom;
	private $prenom;
	private $mail;
	private $tel;
	//private $adresse;
	private $sujet;
	private $message;



	function __construct($code,$nom,$prenom,$mail,$tel,$sujet,$message){
		$this->code=$code;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->mail=$mail;
		$this->tel=$tel;
		//$this->adresse=$adresse;
		$this->sujet=$sujet;
		$this->message=$message;



	}
	function getcode(){
		return $this->code;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getmail(){
		return $this->mail;
	}
	function gettel(){
		return $this->tel;
	}
	//function getadresse(){
	//	return $this->adresse;
	//}
	function getsujet(){
		return $this->sujet;
	}
	function getmessage(){
		return $this->message;
	}

	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom;
	}
	function setmail($mail){
		$this->mail=$mail;
	}
	function settel($tel){
		$this->tel=$tel;
	}
	//function setadresse($adresse){
	//	 $this->adresse=$adresse;
	//}
	function setsujet($sujet){
		 $this->sujet=$sujet;
	}
	function setmessage($message){
		 $this->message=$message;
	}
	
}

?>