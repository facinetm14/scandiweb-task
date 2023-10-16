<?php

require_once('vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable('.');
$dotenv->load();

define('PARTIALS', $_ENV['PARTIALS_PATH']);
define('VIEWS', $_ENV['VIEWS_PATH']);
define('CURRENCY', "$");
define('JS', $_ENV['JS_FILES']);
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWD', $_ENV['DB_PASSWD']);

require_once('routes/web.php');