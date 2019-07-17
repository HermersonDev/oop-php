<?php

namespace Classes\Cycling;

interface BikeInterface
{
	public function getModel();
	public function setModel($model);

	public function getWheel();
	public function setWheel($number_wheels);

	public function move();
	public function stop();
	public function sprint();
}

