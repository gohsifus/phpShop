<?php
session_start();

define('ROOT', dirname(__FILE__)); //Путь к каталогу сайта
require_once(ROOT . '/components/Router.php');

$router = new Router();
$router->run();
?>
