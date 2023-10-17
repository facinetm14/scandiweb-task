<?php

namespace App\Entity;

use App\Entity\Product as Product;
use App\Helpers\HydrateEntity as HydrateEntity;

class Dvd extends Product
{
	use HydrateEntity;

	private	$size;

	public function __construct()
	{
		parent::__construct();
		$this->size = 0;
		$this->type = 'Dvd';
	}

	public function getSize()
	{
		return $this->size;
	}

	public function setSIze($size)
	{
		$this->size = $size;
	}
}
