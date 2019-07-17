<?php

namespace Classes\Cycling;

class BikeSpeed implements BikeInterface
{
	private $model;
	private $number_wheel;

	public function getModel()
	{
		return $this->model;
	}

	public function setModel($model)
	{
		$this->model = $model;
	}

	public function getWheel()
	{
		return $this->number_wheel;
	}

	public function setWheel($number_wheel)
	{
		$this->number_wheel = $number_wheel;
	}

	public function move()
	{
		return "Pedalando...";
	}

	public function stop()
	{
		return "Freiando...";
	}

	public function sprint()
	{
		return "Sprint...";
	}

}