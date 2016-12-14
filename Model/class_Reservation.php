<!-- <!DOCTYPE html>
<html> -->

<?php
class Reservation{

	private $destination;
	private $seats;
	private $insurance;
	private $names;
	private $ages;
	private $error;
	private $page;

  function __contruct(){    //$destination, $seats, $insurance, $names, $ages il ne faut pas mettre ca puisqu on met une valeur par defaut
    $destination = "destination";
    $seats = 0;
    $insurance = "off";
    // $names = array (); //j'aurais pas du faire ca parce que php detecte automatiquement si c est un array.
    // $ages = array (); // maintenant j ai un array dans un array.
		$current_form;
  }

	public function setDestination($destination){
		$this->destination = $destination;
	}
	public function setSeats($seats){
		$this->seats = $seats;
	}
	public function setInsurance($insurance){
		$this->insurance = $insurance;
	}
	public function addName($name){ //liste: pour acceder au premier elem: $objet.names[0]
		$this->names = $name;       //il comprend qu il doit l ajouter tout à la fin
	}
	public function addAge($age){ // idem
		$this->ages = $age;
	}
	public function setPage($nbr){
		$this->page = $nbr;
	}

  public function getDestination(){
  return $this->destination;
  }
  public function getSeats(){
		return ($this->seats);
	}
	public function getInsurance(){
		return ($this->insurance);
	}
	public function getNames(){
		return ($this->names);
	}
	public function getAges(){
		return ($this->ages);
  }
	public function getPage(){
		return ($this->page);
	}
}
?>
