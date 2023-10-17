<?php

namespace App\Models;

use PDO; 

class FurnitureManager
{
	static function save($productDto, $resp)
	{
		$height = htmlspecialchars($productDto['height']);
		$width = htmlspecialchars($productDto['width']);
		$length = htmlspecialchars($productDto['length']);
		

		$resp->bindValue(':size', NULL);
		$resp->bindValue(':weight', NULL);
		$resp->bindParam(':height', $height);
		$resp->bindParam(':width', $width);
		$resp->bindParam(':length', $length);

		$resp->execute();
	}
}