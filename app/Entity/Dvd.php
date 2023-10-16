<?php

namespace App\Entity;

class Dvd extends Product
{

	private size;

	public function getSize()
	{
		return $this->size();
	}

	public function setSIze($size)
	{
		return $this->size();
	}
}
