<?php

namespace App\Entity;

abstract class Product
{
	protected string sku;
	protected string name;
	protected int    price;

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
		return $this->name;
	}

	public function setSku($sku)
	{
		$this->sku = $sku;
	}

	public function setName() 
	{
		$this->name = $name;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}

}
