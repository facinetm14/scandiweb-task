<?php

namespace App\Providers;

class ProductService
{
	static $products = [
		array("id" => 1, "sku" => "JVC00123", "name" => "Acme", "price" => "120", "specs" => "233Kg"),
		array("id" => 1, "sku" => "JVC00123", "name" => "Acme", "price" => "120", "specs" => "233Kg"),
		array("id" => 1, "sku" => "JVC00123", "name" => "Acme", "price" => "120", "specs" => "233Kg"),
		array("id" => 1, "sku" => "JVC00123", "name" => "Acme", "price" => "120", "specs" => "233Kg"),
	];

	static function findAll() 
	{
		
		return self::$products;
	}

	static function save()
	{

	}
}
