<?php

namespace App\Models;

use PDO; 

class DvdManager
{
	static function save($productDto, $resp)
	{
		$size = htmlspecialchars($productDto['size']);
		

		$resp->bindParam(':size', $size);
		$resp->bindValue(':weight', NULL);
		$resp->bindValue(':height', NULL);
		$resp->bindValue(':width', NULL);
		$resp->bindValue(':length', NULL);

		$resp->execute();
	}
}