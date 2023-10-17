<?php

namespace App\Models;

use App\Entity\Book as Book;
use App\Entity\Furniture as Furniture;
use App\Entity\Dvd as Dvd;
use App\DataBase\Database as Database;
use App\Models\DvdManager as DvdManager;
use App\Models\FurnitureManager as FurnitureManager;
use App\Models\BookManager as BookManager;

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

	public function remove($ids)
	{
		$req = "DELETE FROM products WHERE sku=:sku";
		$resp = $this->pdo->prepare($req);

		foreach($ids as $sku => $value) {
			$resp->bindParam(':sku', $sku, PDO::PARAM_STR);
			$resp->execute();
		}
	}

	public function save($productDto)
	{
		$req = "
		INSERT INTO 
		products (sku, name, price, type, size, weight, height, width, length)
		VALUES(:sku, :name, :price, :type, :size, :weight, :height, :width, :length)
		";
		$resp = $this->pdo->prepare($req);

		$sku = htmlspecialchars($productDto['sku']);
		$name = htmlspecialchars($productDto['name']);
		$price = htmlspecialchars($productDto['price']);
		$type = htmlspecialchars($productDto['type']);

		$resp->bindParam(':sku', $sku, PDO::PARAM_STR);
		$resp->bindParam(':name', $name, PDO::PARAM_STR);
		$resp->bindParam(':price', $price);
		$resp->bindParam(':type', $type, PDO::PARAM_STR);

		// delegate to it specific manager
		$productManager = "App\Models\\" . $productDto['type'] . "Manager";
		$productManager::save($productDto, $resp);
	}

}
