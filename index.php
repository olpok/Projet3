<?php
/*
session_start();

use \Tests\POOblog\app\Router;

require_once('config.php');

myConfig::bootApp();




 (isset($_GET['action'])) ? $action = $_GET['action'] : $action = "listPosts";

$router = new Router($action);
$router->render();

*/


session_start();



use \Tests\POOblog\app\Router;

require('controller/frontend.php');



function chargerClasse($classe)
{
  $classe = str_replace('Tests\POOblog\app', '', $classe);
  require ('app/'. $classe . '.php'); // On inclut la classe correspondante au paramètre passé.
}

spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.



 (isset($_GET['action'])) ? $action = $_GET['action'] : $action = "listPosts";

$router = new Router($action);
$router->render();
