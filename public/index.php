<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Application\Core\Router;

$router = new Router();
$router->run();

?>
