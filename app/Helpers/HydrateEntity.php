<?php

namespace App\Helpers;

Trait HydrateEntity
{

	public function hydrate($obj)
	{
		if (empty($obj)) {
			return ;
		}
		foreach($obj as $key => $value) {
			if (property_exists($this, $key)) {
				$method = 'set'.ucfirst($key);
				$this->$method($value);
			}
		}
	}
}