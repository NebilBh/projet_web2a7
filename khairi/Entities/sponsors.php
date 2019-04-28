<?PHP
class sponsors{
	private $nom;
	private $type;
	private $renverssement;
	private $image;
	
	function __construct($nom,$type,$renverssement,$image){
		
		$this->nom=$nom;
		$this->type=$type;
		$this->renverssement=$renverssement;
		$this->image=$image;
		
	}
	function getNom(){
		return $this->nom;
	}
	function getType(){
		return $this->type;
	}
	function getRenverssement(){
		return $this->renverssement;
	}
		function getimage(){
		return $this->image;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setType($type){
		$this->type=$type;
	}
	function setRenverssement($renverssement){
		$this->renverssement=$renverssement;
	}
	
		function setimage($image){
		$this->image=$image;
	}

}

?>