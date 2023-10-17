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
		try {
			(new ProductService())->save($productDTO);
		}
		catch(Exception ) {
			
		}
		header("Location: http://localhost/scandiweb-task/");
	}

	static function delete($ids) {
		(new ProductService())->delete($ids);
		header("Location: http://localhost/scandiweb-task/");
	}
}
