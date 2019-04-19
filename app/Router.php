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
                        'edit' => 'edit',
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

          //  echo $this->action; 

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





/*


(isset($_GET['action'])) ? $action = $_GET['action'] : $action = "listPosts";

// cle=action => valeur=fonction 
/*

$routes = array(
                    'listPosts'            => array('method'     => 'listPosts',    'firewall'    => false),
                    'post'                 => array('method'     => 'post',         'firewall'    => false),
                    'ma-page-accueil.html' => array('method'     => 'listPosts',    'firewall'    => false),
                    'home'                 => array('method'     => 'listPosts',    'firewall'    => false),
                    'signalForm'           => array('method'     => 'signalForm',   'firewall'    => false),
                    'signal'               => array('method'     => 'signal',       'firewall'    => false),
                    'login'                => array('method'     => 'formAdmin',    'firewall'    => false),
                    'signing'              => array('method'     => 'signing',      'firewall'    => false),
                    'contact'              => array('method'     => 'formContact',  'firewall'    => false),
                    'aPropos'              => array('method'     => 'aPropos',      'firewall'    => false),
                    'addComment'           => array('method'     => 'addComment',   'firewall'    => false),
                    'edit'                 => array('method'     => 'edit',         'firewall'    => false),
                    'updateC'              => array('method'     => 'updateC',      'firewall'    => false),
                    'deleteC'              => array('method'     => 'deleteC',      'firewall'    => false),
                    'addPost'              => array('method'     => 'addPost',      'firewall'    => true),
                    'editPost'             => array('method'     => 'editPost',     'firewall'    => true),
                    'updateP'              => array('method'     => 'updateP',      'firewall'    => true),
                    'deleteP'              => array('method'     => 'deleteP',      'firewall'    => true),
                    'logout'               => array('method'     => 'logout',       'firewall'    => true)

);
*/
/*
$routes = array(
                    
                        'listPosts' => 'listPosts',
                        'post'      => 'post',
                        'ma-page-accueil.html' => 'listPosts',
                        'home' => 'listPosts',
                        'signalForm' => 'signalForm',
                        'signal' => 'signal',
                        'login'     => 'formAdmin',
                        'signing' => 'signing',
                        'contact'     => 'formContact',
                        'aPropos' =>'aPropos',
                        'addComment' => 'addComment',
                        'edit' => 'edit',
                        'updateC' => 'updateC',
                        'deleteC' => 'deleteC',
                        'addPost' => 'addPost',
                        'editPost' => 'editPost',
                        'updateP' => 'updateP',
                        'deleteP' => 'deleteP',
                        'logout' => 'logout'

);


try { // On essaie de faire des choses

        // si mon action demandée existe
        if(array_key_exists($action, $routes)) {


/*

           // $controller = $routes[$action]["controller"];
            $method     = $routes[$action]["method"];
            $firewall   = $routes[$action]["firewall"];

            // check author
            if($firewall == true) {
                // heck authorisation session
                // si role == admin
                // si echec header location sur index avec un message "vous n'avez pas les droits"
            }

            $method(); // si tu es en procedurales

*/

            
/*
            // on lance la fonction associé
            $fonc = $routes[$action];
            $fonc();

        }

}
catch(Exception $e) { // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}
*/
