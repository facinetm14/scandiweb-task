<?php

require_once('vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable('.');
$dotenv->load();

require_once('app/APP_CONSTS.php');
require_once('routes/web.php');