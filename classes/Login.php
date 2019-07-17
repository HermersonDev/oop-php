<?php

namespace Classes;

class Login
{
	private $username;
	private $email;
	private $senha;

	public function __construct($username, $email, $senha)
	{
		$this->username = $username;
		$this->setEmail($email);
		$this->setSenha($senha);
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email; 
	}

	public function getSenha()
	{
		return $this->senha;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha; 
	}

	public function enter() 
	{
		if ($this->email === 'ne.hermerson@gmail.com' 
			&& $this->senha === '123') {
			echo "Bem-vindo, $this->username !";
		} else {
			echo "Dados inválidos!";
		}
	}
}

$login = new Login('Hermerson', 'ne.hermerson@gmail.com', '123');
$login->enter();
echo '<br>';
echo $login->getUsername() . "<br>";
echo $login->getEmail() . "<br>";
echo $login->getSenha() . "<br>";
