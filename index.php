<?php

session_start();
var_dump($_SESSION);


use \Tests\POOblog\app\Router;

require('controller/frontend.php');



function chargerClasse($classe)
{
  $classe = str_replace('Tests\POOblog\app', '', $classe);
  require ('app/'. $classe . '.php'); // On inclut la classe correspondante au paramètre passé.
}

spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

/*
require_once('app/Router.php');*/

 (isset($_GET['action'])) ? $action = $_GET['action'] : $action = "listPosts";

$router = new Router($action);
$router->render();














/*
spl_autoload_register(array(__CLASS__, 'autoload')); 

function autoload($class)
{
  if (file_exists(model\$class.'.php'))
  {
    require_once(model\$class.'.php');
  }
  elseif (file_exists(app\$class.'.php')) 
  {
    require_once(app\$class.'.php');
  };
}
*/


/*
public static function autoload($class)
{
	if (file_exists(model\$class.'.php'))
	{
		require_once(model\$class.'.php');
	}
	elseif (file_exists(app\$class.'.php')) 
	{
		require_once(app\$class.'.php');
	}
}


spl_autoload_register(); */