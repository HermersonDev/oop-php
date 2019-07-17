<?php

namespace Classes\Vehicles;

class Car extends Vehicle 
{
	
	public function setWheels($wheels) 
	{
		$this->wheels = $wheels;
	}

	public function getWheels()
	{
		return $this->wheels;
	}

	// Cinto de Segurança
	public function seatBelt() 
	{
		return "Colocando o cinto de segurança...";
	}

	public function callActionMove() {
		return $this->toMove();
	}

	public function callActionStop() {
		return $this->toStop();
	}

}
