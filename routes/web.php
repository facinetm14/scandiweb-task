<?php

use App\Controllers\ProductController as ProductController; 

$router = new AltoRouter();

$router->setBasePath('/scandiweb-task');

$router->map('GET', '/', function() {
	ProductController::index();
});

$router->map('GET', '/addProduct', function() {
    ProductController::displayForm();
});

$router->map('POST', '/addProduct', function() {
	$productDTO = $_POST;
    ProductController::create($productDTO);
});

$match = $router->match();

if (!$match) {
	die('Not Found');
}
else {
	$match['target']();
}
