<?PHP
class Livraison{
	private $cin;
	private $nom;
	private $prenom;
	private $tel;
	private $mail;
	private $adresse;
	private $ville;


	function __construct($cin,$nom,$prenom,$tel,$mail,$adresse,$ville){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;
		$this->mail=$mail;
		$this->adresse=$adresse;
		$this->ville=$ville;
	}
	
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
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
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function settel($nbHeures){
		$this->tel=$tel;
	}
	function setmail($mail){
		$this->mail=$mail;
	}
	 function setadresse(){
		$this->adresse=$adresse;
	}

	function setville(){
		 $this->ville=$ville;
	}
	
}

?>