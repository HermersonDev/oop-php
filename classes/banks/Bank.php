<?php

namespace Classes\Banks;

abstract class Bank
{
	protected $account;
	private $balance;
	const LIMIT_SAKE = 500;

	final public function __construct($account, $balance)
	{
		$this->account = $account;
		$this->balance = $balance;
	}

	final public function getBalance() 
	{
		return $this->balance;
	}

	final protected function setBalance($balance)
	{
		$this->balance = $balance;
	}

	final public static function getLimit()
	{
		return self::LIMIT_SAKE;
	}

	abstract protected function cashOut($money);
	
	abstract protected function deposit($money);
}
