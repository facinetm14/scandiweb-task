<?php

namespace App\Entity;

abstract class Product
{
	protected string $sku;
	protected string $name;
	protected 		 $price;
	protected string $type;

	function __construct()
	{
		$this->sku = "";
		$this->name = "";
		$this->price = 0;
		$this->type = "";
	}

	public function getSku()
	{
		return $this->sku;
	} 

	public function getName()
	{
		return $this->name;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setSku($sku)
	{
		$this->sku = $sku;
	}

	public function setName($name) 
	{
		$this->name = $name;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}

	public function setType($type)
	{
		$this->type = $type;
	}
}
