<?PHP
class Reclamation{
	
	private $mail;
	private $tel;
	private $categorie;
	private $sujet;
	private $message;
	private $dater;



	function __construct($mail,$tel,$categorie,$sujet,$message,$dater){
		$this->mail=$mail;
		$this->tel=$tel;
		$this->categorie=$categorie;
		$this->sujet=$sujet;
		$this->message=$message;
		$this->dater=$dater;



	}
	function getmail(){
		return $this->mail;
	}
	function gettel(){
		return $this->tel;
	}
	function getcategorie(){
		return $this->categorie;
	}
	function getsujet(){
		return $this->sujet;
	}
	function getmessage(){
		return $this->message;
	}
	function getdater(){
		return $this->dater;
	}


	function setmail($mail){
		$this->mail=$mail;
	}
	function settel($tel){
		$this->tel=$tel;
	}
	function setcategorie($categorie){
		 $this->categorie=$categorie;
	}
	function setsujet($sujet){
		 $this->sujet=$sujet;
	}
	function setmessage($message){
		 $this->message=$message;
	}
	function setdater($dater){
		 $this->dater=$dater;
	}
	
}

?>