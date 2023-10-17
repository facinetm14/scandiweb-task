<?php

$title = 'Product List';

$actionBtn = '
<form method="POST" action="delProduct">
<a href="addProduct" class="btn btn-primary" id="add-product-btn">ADD</a>
<input type="submit" class="btn btn-danger" style="margin-left:20px" id="delete-product-btn" value="MASS DELETE"/>
';

// start buffering
ob_start();
include_once(PARTIALS . 'data.php');
$body = ob_get_clean();

ob_start();
include_once(JS . 'product-js.php');
$scriptJs = ob_get_clean();

ob_end_clean();

include_once(VIEWS . 'template.php');
