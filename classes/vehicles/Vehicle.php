<?php

namespace Classes\Vehicles;

class Vehicle
{
	private $model;
	public $color;
	public $year;
	protected $wheels;

	public function __construct($model)
	{
		$this->model = $model;
	}

	public function getModel()
	{
		return $this->model;
	}

	public function setModel($model)
	{
		$this->model = $model;
	}

	public function getColor()
	{
		return $this->color;
	}

	public function setColor($color)
	{
		$this->color = $color;
	}

	public function getYear()
	{
		return $this->year;
	}

	public function setYear($year)
	{
		$this->year = $year;
	}

	private function drive() 
	{
		return "Veículo em movimento.";
	}

	private function stop()
	{
		return "Veículo parado.";
	}

	protected function toMove() 
	{
		return $this->drive();
	}

	protected function toStop()
	{
		return $this->stop();
	}
}
