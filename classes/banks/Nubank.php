<?php

namespace Classes\Banks;

class Nubank extends Bank
{
	const LIMIT_SAKE = 600;

	public function cashOut($money)
	{	
		if ($money > parent::LIMIT_SAKE) { 
			return "O limite de saque de sua conta é R$ " . parent::LIMIT_SAKE; 
		}

		$balance = $this->getBalance();
		if ($money > $balance) {
			return "Saldo insuficiênte. Seu saldo atual é R$ " . $balance;
		}

		$balance -= $money;
		$this->setBalance($balance);

		return $balance; 
	}

	public function cashOutNubank($money)
	{	
		if ($money > self::LIMIT_SAKE) { 
			return "O limite de saque de sua conta é R$ " . self::LIMIT_SAKE; 
		}

		$balance = $this->getBalance();
		if ($money > $balance) {
			return "Saldo insuficiênte. Seu saldo atual é R$ " . $balance;
		}

		$balance -= $money;
		$this->setBalance($balance);

		return $balance; 
	}
	
	public function deposit($money)
	{	
		$balance = $this->getBalance();
		$balance += $money;
		$this->setBalance($balance);

		return $balance;
	}

	public static function getLimitNubank() 
	{
		return self::LIMIT_SAKE;
	}
}
