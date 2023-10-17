<?php

namespace App\Entity;

use App\Entity\Product as Product;
use App\Helpers\HydrateEntity as HydrateEntity;

class Book extends Product
{
	use HydrateEntity;

	private $weight;

	public function __construct()
	{
		parent::__construct();
		$this->type = 'Book';
		$this->weight = 0;
	}

	public function getWeight()
	{
		return $this->weight;
	}

	public function setWeight($weight)
	{
		$this->weight = $weight;
	}
}
