<?php

require_once 'vendor/autoload.php';

use App\Database\Table\ProductTable;
use App\Model\Product;
use App\Model\ProductDAO;

$product_table = new ProductTable();
$product_table->createTable();

$product = new Product('Notebook DELL', 'Processador i5 8°; 8gb RAM DDR4; SDD 500gb.');

$product_dao = new ProductDAO();
$product_dao->create($product);
