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
    ProductController::create($productDTO);
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
