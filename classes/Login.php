<?php

namespace Classes;

use \Exception;
use Classes\Person;

class Login
{
	private $data = array();

	public function __construct($username, $email, $password)
	{
		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
	}

	public function __get($property)
	{
		return $this->data[$property];
	}

	public function __set($property, $value)
	{
		$this->data[$property] = $value;
	}

	public function __toString()
	{
		return "Class Login";
	}

	public function __invoke()
	{
		$str = "props: username(String), email(String), senha(Number).";
		return $str;
	}

	public function enter($email, $password) 
	{	
		try {

			$this->validate($email, $password);

			if ($this->email === $email && $this->password === $password) {
				echo "Bem-vindo, $this->username !";
			} else {
				echo "Dados inválidos!";
			}

		} catch (Exception $e) {
			if ($e->getCode() === 1) {
				echo $e->getMessage() . " - Por favor verifique seu email.";
			} else {
				echo $e->getMessage() . " - Por favor verifique sua password.";
			}
		}

	}

	private function validateData($email, $password)
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new Exception('Email inválido', 1);
		}

		if (!filter_var($password, FILTER_VALIDATE_INT)) {
			throw new Exception('A password é apenas números', 2);
		}
	}

}

