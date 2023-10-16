<?php

$title = 'Product Add';

// creating the button action
$actionBtn = '
<form action="" method="post" id="product_form">
<input type="submit" class="btn btn-primary" id="save-btn" value="Save"/>
<a href="javascript:history.back()" type="button" class="btn btn-danger" style="margin-left:20px" id="cancel-btn">
Cancell
</a>
';

// start buffering
ob_start();
include_once(PARTIALS . 'addProductForm.php');
$body = ob_get_clean();

ob_start();
include_once(JS . 'addProduct-js.php');
$scriptJs = ob_get_clean();

ob_end_clean();

include_once(VIEWS . 'template.php');