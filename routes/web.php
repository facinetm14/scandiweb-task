<?php

use App\Controllers\ProductController as ProductController;
use App\Tests\ProductTest as ProductTest; 

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
	var_dump($productDTO);
    ProductController::create($productDTO);
});

$router->map('POST', '/delProduct', function() {
	$productIds = $_POST;
    ProductController::delete($productIds);
});

//--------------------Just For Testing------------
$router->map('GET', '/testProduct', function() {
	$tester = new ProductTest();
	$tester->testProductCreatedSuccess();
	$tester->testProductAccessor();
	$tester->testProductHydrate();
	$tester->repositoryFindAll();
});
//------------------------------------------------
$match = $router->match();

if (!$match) {
	die('Not Found');
}
else {
	$match['target']();
}
