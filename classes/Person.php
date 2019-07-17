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

	public function __clone() 
	{	
		$this->name = "Clone";
		echo "<hr> Clonagem em andamento ...";
	}

	public function falar()
	{
		echo "Olá! Meu nome é $this->name $this->lastname, tenho $this->age anos e sou desenvolvedor.";
	}

}
