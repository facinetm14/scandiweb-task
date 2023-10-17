<?php

namespace App\Models;

use App\Entity\Book as Book;
use App\Entity\Furniture as Furniture;
use App\Entity\Dvd as Dvd;
use App\DataBase\Database as Database;
use PDO;

Class ProductRepository
{
	private $pdo;

	function __construct()
	{
		$instance = Database::getInstance();
		$this->pdo = $instance->getConnection();
	}

	public function findAll()
	{
		$req = "SELECT * FROM products GROUP BY sku ORDER BY sku DESC";
		$resp = $this->pdo->query($req);

		$products = $resp->fetchAll(PDO::FETCH_ASSOC);
		return $products;
	}

}
