<?php 

namespace App\Model;

use PDO;
use PDOException;

class ProductDAO
{	
	public function create(Product $p)
	{
		$db = Connection::getConnection();

		try {

			$sql = 'INSERT INTO product(name, desc) VALUES (:name, :desc)';
			$stmt = $db->prepare($sql);

			$stmt->bindParam(':name', $p->name);
			$stmt->bindParam(':desc', $p->desc);

			$stmt->execute();

		} catch(PDOException $e) {
			echo $e->getMessage();
		}

	}

	public function read()
	{	
		$db = Connection::getConnection();

		try {

			$sql = "SELECT * FROM product";
			$stmt = $db->prepare($sql);
			$stmt->execute();
				
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$products = array_map(function($row) {
				return (object) $row;
			}, $rows);

		} catch(PDOException $e) {
			echo $e->getMessage();
		}

		return $products;
	}

	public function update(Product $p)
	{
		$db = Connection::getConnection();

		try {

			$sql = "UPDATE product SET name = :name, desc = :desc WHERE id = :id";
			$stmt = $db->prepare($sql);
			
			$stmt->bindParam(':name', $p->name);
			$stmt->bindParam(':desc', $p->desc);
			$stmt->bindParam(':id', $p->id);

			if ($stmt->execute()) {
				return "Produto atualizado.";
			}

		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function delete($id)
	{
		$db = Connection::getConnection();

		try {

			$sql = "DELETE FROM product WHERE id = :id";
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':id', $id);
			
			if ($stmt->execute()) {
				return "Produto removido.";
			}

		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
}
