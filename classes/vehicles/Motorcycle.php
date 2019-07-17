<?php

namespace Classes\Vehicles;

class Motorcycle extends Vehicle 
{	

	public function setWheels($wheels) 
	{
		$this->wheels = $wheels;
	}

	public function getWheels()
	{
		return $this->wheels;
	}

	// Empinar moto.
	public function wheelie()
	{
		return "Empinando moto...";
	}

	public function callActionMove() {
		return $this->toMove();
	}

	public function callActionStop() {
		return $this->toStop();
	}
	
}
