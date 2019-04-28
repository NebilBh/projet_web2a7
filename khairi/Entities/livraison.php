<?PHP
class Livraison{
	
	private $nom;
	private $tel;
	private $mail;
	private $adresse;
	private $ville;


	function __construct($nom,$tel,$mail,$adresse,$ville){
		
		$this->nom=$nom;
		$this->tel=$tel;
		$this->mail=$mail;
		$this->adresse=$adresse;
		$this->ville=$ville;
	}
	
	
	function getNom(){
		return $this->nom;
	}
	/*function getPrenom(){
		return $this->prenom;
	}*/
	function gettel(){
		return $this->tel;
	}
	function getmail(){
		return $this->mail;
	}
	function getadresse(){
		return $this->adresse;
	}
	function getville(){
		return $this->ville;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	/*function setPrenom($prenom){
		$this->prenom=$prenom;
	}*/
	function settel($tel){
		$this->tel=$tel;
	}
	function setmail($mail){
		$this->mail=$mail;
	}
	 function setadresse($adresse){
		$this->adresse=$adresse;
	}

	function setville($ville){
		 $this->ville=$ville;
	}
	
}

?>