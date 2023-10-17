<?php

namespace App\Entity;

use App\Helpers\HydrateEntity as HydrateEntity;
use App\Entity\Product as Product;

class Book extends Product
{
	use HydrateEntity;

	private  $height;
	private  $width;
	private  $length;


	public function __construct()
	{
		parent::__construct();
		$this->height = 0;
		$this->width = 0;
		$this->length = 0;
		$this->type = 'Book';
	}

	public function getHeight()
	{
		return $this->height;
	}

	public function getWidth()
	{
		return $this->width;
	}

	public function getLength()
	{
		return $this->length;
	}

	public function setHeight($height)
	{
		$this->height = $height;
	}

	public function setWidth($width)
	{
		$this->width = $width;
	}

	public function setLength($length)
	{
		$this->length = $length;
	}

}
