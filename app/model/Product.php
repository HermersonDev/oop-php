<?php

namespace App\Model;

class Product 
{
	private $data = array();

	public function __construct($name, $desc)
	{
		$this->name = $name;
		$this->desc = $desc;
	}

	public function __get($property)
	{
		return $this->data[$property];
	}

	public function __set($property, $value)
	{
		$this->data[$property] = $value;
	}
}
