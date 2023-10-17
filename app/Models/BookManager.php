<?php

namespace App\Models;

use PDO; 

class BookManager
{
	static function save($productDto, $resp)
	{
		$weight = htmlspecialchars($productDto['weight']);
		

		$resp->bindValue(':size', NULL);
		$resp->bindParam(':weight', $weight);
		$resp->bindValue(':height', NULL);
		$resp->bindValue(':width', NULL);
		$resp->bindValue(':length', NULL);

		$resp->execute();
	}
}