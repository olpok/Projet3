<?php

use Tests\POOblog\app\Router;

require_once('config.php');

myConfig::bootApp();




 (isset($_GET['action'])) ? $action = $_GET['action'] : $action = "listPosts";

$router = new Router($action);
$router->render();

