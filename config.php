<?php


class myConfig
{

  public static function bootApp() {

        //session_start();
        
        require('controller/frontend.php');

        function chargerClasse($classe)
        {
          $namespaces = ['Tests\POOblog\app', 'Tests\POOblog\model'];
          $classe = str_replace($namespaces, '', $classe);
          if(file_exist('app/'. $classe . '.php') {
             require ('app/'. $classe . '.php');
          }
          if(file_exist('model/'. $classe . '.php') {
             require ('model/'. $classe . '.php');
          }
        }

        spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.
  }
}
