<?php

namespace App\Controllers;
use App\Providers\ProductService as ProductService;

class ProductController
{
	static function index() 
	{
		require_once(VIEWS . 'products.php');
	}

	static function displayForm() 
	{
		require_once(VIEWS . 'addProduct.php');
	}

	static function create($productDTO) {

		ProductService::save($productDTO);
		self::index();
	}
}
