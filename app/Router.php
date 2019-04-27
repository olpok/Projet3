<?php
// router, crée les routes et vérifie des autorisations

namespace Tests\POOblog\app;


class Router
{

       private $routes = array(
                    
                        'listPosts' => 'listPosts',
                        'post'      => 'post',
                        'ma-page-accueil.html' => 'listPosts',
                        'home' => 'listPosts',
                        'signal' => 'signal',
                        'login'     => 'formAdmin',
                        'signing' => 'signing',
                        'formAddPost' => 'formAddPost',
                        'listSignaledComments' => 'listSignaledComments',
                        'contact'     => 'formContact',
                        'aPropos' =>'aPropos',
                        'mentionsLegales' => 'mentionsLegales',
                        'addComment' => 'addComment',
                        'deleteC' => 'deleteC',
                        'addPost' => 'addPost',
                        'editPost' => 'editPost',
                        'updateP' => 'updateP',
                        'deleteP' => 'deleteP',
                        'logout' => 'logout',
                        'p404' => 'p404'

                        );

    private $action;

    public function __construct ($action)
    {
        $this->action = $action;
    }
   
            
    public function render()
    {
  

        try 
        {   // On essaie de faire des choses

            // si mon action demandé existe
            if(array_key_exists($this->action, $this->routes)) 
            {    
                // on lance la fonction associé
                $fonc = $this->routes[$this->action];
                $fonc();
            } else {

                header('Location: index.php?action=p404');

            }

        } catch(Exception $e) { // S'il y a eu une erreur, alors...
            echo 'Erreur : ' . $e->getMessage();
        }


    }


}