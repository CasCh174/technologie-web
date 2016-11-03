<?php
class Reservation{

	private $destination;
	private $seats;
	private $insurance;
	private $names;
	private $ages;
	private $error;

	public function setDestination(destination){
		$this->destination = $destination;
	}
	public function setSeats(seats){
		$this->seats = $seats;
	}
	public function setInsurance(insurance){
		$this->insurance = $insurance;
	}
	public function setNames(names){ //liste ???
		$this->names = $names;
	}
	public function setAges(ages){ //
		$this->ages = $ages;
	}

  public function getDestination(){
  return ($this->destination);
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
}

?>