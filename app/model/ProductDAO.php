<?php 

namespace App\Model;

class ProductDAO
{	
	public function create(Product $p)
	{
		$db = Connection::getConnection();

		$sql = 'INSERT INTO product(name, desc) VALUES (:name, :desc)';
		$stmt = $db->prepare($sql);

		$stmt->bindParam(':name', $p->name);
		$stmt->bindParam(':desc', $p->desc);

		$stmt->execute();

	}

	public function read()
	{

	}

	public function update(Product $p)
	{

	}

	public function delete($id)
	{

	}
}
