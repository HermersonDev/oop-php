<?php

namespace App\Database\Table;

use App\Model\Connection;
use PDOException;

class ProductTable
{
	private $db;

	public function __construct()
	{
		$this->db = Connection::getConnection();
	}

	public function createTable()
	{
		try {
			$this->db->exec("
				CREATE TABLE IF NOT EXISTS product (
				id INTEGER PRIMARY KEY AUTOINCREMENT,
				name VARCHAR(100) NOT NULL,
				desc VARCHAR(255)
				)
			");	
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function deleteTable()
	{
		try {
			$this->db->exec("
				DROP TABLE IF EXISTS product;
			");
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}


