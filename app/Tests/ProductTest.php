<?php

// I'm testing on my own, I wanted to integrated phpunit test but some how not working extension=dom
namespace App\Tests;
use App\Entity\Dvd as Dvd;
use App\Entity\Furniture as Furniture;
use App\Entity\Book as Book;
use App\Models\ProductRepository as ProductRepository;

class ProductTest
{
	public function testProductCreatedSuccess()
	{
		$book = new Book();
		$dvd = new Dvd();
		$furniture = new Furniture();

		$test_1 = ($book->getType() == 'Book') ? 'OK ' : 'KO ';
		$test_2 = ($dvd->getType() == 'Dvd') ? 'OK ' : 'KO';
		$test_3 = ($furniture->getType() == 'Furniture') ? 'OK ' : 'KO';
		
		echo '<h5>TEST PRODUCT CREATED SUCCESSFULLY</h5>';
		echo '<span> Book: ' . $test_1 . '</span>';
		echo '<span> Dvd: ' . $test_2 . '</span>';
		echo '<span> Furniture: ' . $test_3 . '</span>';
		echo '<hr/>';
	}

	public function testProductAccessor()
	{
		$book = new Book();

		$book->setSku('JVC00123');
		$book->setName('Acme');

		$test_1 = ($book->getSku() == 'JVC00123') ? 'OK ' : 'KO ';
		$test_2 = ($book->getName() == 'Acme') ? 'OK ' : 'KO ';
		
		echo '<h5>TEST PRODUCT ACCESSOR</h5>';
		echo '<span> SKU: ' . $test_1 . '</span>';
		echo '<span> NAME: ' . $test_2 . '</span>';
		echo '<hr/>';
	}

	public function testProductHydrate()
	{
		$dvd = new Furniture();
		$given = [
			'sku' => "JVC00123",
			'name' => "Acme",
			'weight' => 129,
			'price' => 291,
		];

		$dvd->hydrate($given);

		var_dump($dvd);

		$test_1 = ($dvd->getSku() == $given['sku']) ? 'OK ' : 'KO ';
		$test_2 = ($dvd->getName() == $given['name']) ? 'OK ' : 'KO ';
		$test_3 = ($dvd->getWeight() == $given['weight']) ? 'OK ' : 'KO ';
		$test_4 = ($dvd->getPrice() == $given['price']) ? 'OK ' : 'KO ';
		
		echo '<h5>TEST PRODUCT HYDRATE</h5>';
		echo '<span> SKU: ' . $test_1 . '</span>';
		echo '<span> NAME: ' . $test_2 . '</span>';
		echo '<span> SPEC: ' . $test_3 . '</span>';
		echo '<span> PRICE: ' . $test_4 . '</span>';
		echo '<hr/>';
	}

	public function repositoryFindAll()
	{
		$repo = new ProductRepository();

		$products = $repo->findAll();

		$test_1 = (!empty($products)) ? 'OK ' : 'KO ';

		echo '<h5>TEST PRODUCT FINDALL</h5>';

		echo '<span> GET PRODUCTS: ' . $test_1 . '</span>';
		echo '<hr/>';
	}

}