<?php
class Reservation{

	private $destination;
	private $seats;
	private $insurance;
	private $names;
	private $ages;
	private $error;
	private $page;

	public function setDestination($destination){
		$this->destination = $destination;
	}
	public function setSeats($seats){
		$this->seats = $seats;
	}
	public function setInsurance($insurance){
		$this->insurance = $insurance;
	}
	public function addName($name){
		$this->names = $name;       //il comprend qu il doit l ajouter tout à la fin
	}
	public function addAge($age){
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
