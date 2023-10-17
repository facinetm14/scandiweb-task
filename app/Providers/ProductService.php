<?php

namespace App\Providers;

require_once('app/Entity/Dvd.php');

use App\Models\ProductRepository as ProductRepository;

class ProductService
{
	private ProductRepository $repo;

	function __construct()
	{
		$this->repo = new ProductRepository();
	}

	public function findAll() 
	{
		$Allproducts = [];

		$data = $this->repo->findAll();

		if(!empty($data)) {
			foreach($data as $el) {
				$type = "App\Entity\\".$el['type'];
				$product = new $type();
				$product->hydrate($el);
				array_push($Allproducts, $product);
			}
		} 

		return $Allproducts;
	}

	public function save()
	{

	}
}
