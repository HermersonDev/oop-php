<?php

require_once 'vendor/autoload.php';

use App\Database\Table\ProductTable;
use App\Model\Product;
use App\Model\ProductDAO;

// $product_table = new ProductTable();
// $product_table->createTable();

$product = new Product(3, 'Notebook DELL', 'Processador i5 8°; 8gb RAM DDR4; SDD 500gb.');

$product_dao = new ProductDAO();
// $product_dao->create($product);
echo $product_dao->update($product) . "<hr>";
$products = $product_dao->read();
echo "<hr>" . $product_dao->delete(3);

foreach ($products as $product) {
	echo $product->name;
}
