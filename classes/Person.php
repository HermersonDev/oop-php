<?php

namespace Classes;

class Person 
{
	public $name;
	public $lastname;
	public $age;
	public $head_color;
	public $eyes_color;
	public $skin_color;
	public $height;
	public $size;
	private $parent;

	public function __clone() 
	{	
		$this->name = "Clone";
		echo "<hr> Clonagem em andamento ...";
	}

	public function getParent()
	{
		return $this->parent;
	}

	public function setParent($parent_name)
	{
		$this->parent = new Person();
		$this->parent->name = $parent_name;
	}

	public function falar()
	{
		echo "Olá! Meu nome é $this->name $this->lastname, tenho $this->age anos e sou desenvolvedor.";
	}



}
