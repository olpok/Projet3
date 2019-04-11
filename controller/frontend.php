<?php

use \Tests\POOblog\model\PostManager;
use \Tests\POOblog\model\CommentManager;
use \Tests\POOblog\model\UserManager;

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');



function listPosts()
{
    $postManager = new PostManager(); 
    $posts = $postManager->getPosts(); 

    require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment()

{
    if (isset($_GET['id']) && $_GET['id'] > 0){

        $postId  = $_GET['id'];
        $author  = $_POST['author'];
        $comment = $_POST['comment'];

        if($author != "" && $comment != "") {
            $commentManager = new CommentManager();
            $affectedLines = $commentManager->postComment($postId, $author, $comment);

            header('Location: index.php?action=post&id=' . $postId);            
        } else {

            $_SESSION['flashMessage'] = 'commentaire ou auteur vide !';
            header('Location: index.php?action=post&id=' . $postId); 
        } 
    }    
}

 function edit()
{ 
    $commentId = $_GET['id'];
    $commentManager = new CommentManager();
    $comments=$commentManager->getComment($commentId);

    require('view/frontend/commentView.php');
}
/*
function updateC()
{ 
   $postId = $_GET['id']; 

    $commentManager = new CommentManager();
    $updatedlines = $commentManager->updateComment($_POST['id'],$_POST['author'],$_POST['comment'],$postId, 0); 

  if ($updatedLines === false) {
        throw new Exception('Impossible de modifier le commentaire !');
    }
    else {
   header('Location: index.php?action=post&id=' . $postId); 
    }     
}
*/

function signal()
{ 
    $postId = $_GET['idP']; 
    $commentId = $_GET['idC']; 

    $postManager = new PostManager();
    $commentManager = new CommentManager();
  
    $post = $postManager->getPost($postId);
    $comments = $commentManager->getComments($commentId);

    $signaledLines = $commentManager->signalComment($commentId, $postId);

    if ($signaledLines === false) {
       $_SESSION['flashMessage'] = 'Impossible de signaler le commentaire !';
    }
    else {
         header('Location: index.php?action=post&id=' . $postId); 
   }    
}

function listSignaledComments()
{
    if(isset($_SESSION['authentification']) && $_SESSION['role'] = 'admin'){

        $commentManager = new CommentManager();
        $signaledComments = $commentManager->getSignaledComments();

        require('view/backend/adminSignaledCommentsView.php');
    }
    else {
          require('view/frontend/form_admin.php');
    }
}
 
function deleteC()
{
    $commentId = $_GET['comment_id'];

    $commentManager = new CommentManager();
    $deletedLines = $commentManager->deleteComment($commentId);

    if ($deletedLines === false) {
        $_SESSION['flashMessage'] = 'Impossible de supprimer le commentaire !';
    }
    else {
        header('Location: index.php?action=editPost&id=' . $_GET['id']);
    }
}
/*
function adminView()
{
    if(isset($_SESSION['authentification']) && $_SESSION['role'] = 'admin'){

        $postManager = new PostManager(); 
        $posts = $postManager->getPosts();  
	
        require('view/backend/adminView.php');
    }    
     else {
          require('view/frontend/form_admin.php');
    }
}*/

function formAdmin()
{

    if(isset($_SESSION['authentification']) && $_SESSION['role'] = 'admin'){

        $postManager = new PostManager(); 
        $posts = $postManager->getPosts(); 

        require('view/backend/adminView.php');
    }

    else {
          require('view/frontend/form_admin.php');
    }
}


function signing ()
{
   $userManager = new UserManager(); 

    if (isset($_POST['identifiant']) AND isset($_POST['pass'])) {

        $ident_form = $_POST['identifiant'];   
        $password_form = $_POST['pass'];
       

  	   if($user = $userManager->getUserByIdent($ident_form)) { // test si le user existe 
            echo '<br/>';
            echo sha1($password_form); 


            echo '<br/>';
            echo $user['login'];
            echo '<br/>';

            if(sha1($password_form) == $user['login'])  { // check password
               
                $_SESSION['authentification'] = 1;
                $_SESSION['role'] = 'admin'; 
            } 
            else {

                $_SESSION['flashMessage'] = 'Erreur de password !';
            }
       }
       else {
                $_SESSION['flashMessage'] = 'Identifiant n\'existe pas !';
       } 

	}

 //   $postManager = new PostManager(); 
  //  $posts = $postManager->getPosts(); 

    header('Location: index.php?action=login');

//    require('view/backend/adminView.php');
}

function logout()
{
    session_unset();
    header('Location: index.php');
}

function formContact()
{
   require('view/frontend/formContact.php') ;
}

function formAddPost()
{
    if(isset($_SESSION['authentification']) && $_SESSION['role'] = 'admin'){
   
    require('view/backend/adminAddPostView.php') ;    
     }
    else {
          require('view/frontend/form_admin.php');
    }
    
}

function aPropos()
{
   require('view/frontend/aPropos.php') ;
}

function p404()
{
   require('view/frontend/404.php') ;
}

function addPost()

{
    if( !isset($_SESSION['role']) OR $_SESSION['role'] != 'admin' )

        {
                $_SESSION['flashMessage'] = 'Impossible !';
         }
            $title = $_POST['title']; $content =  $_POST['content'];

            if($title != "" && $content != "") {
                $postManager = new PostManager();
                $addedLines = $postManager->postPost($title,$content);

                $posts = $postManager->getPosts(); 

                if ($addedLines === false ) {
                    $_SESSION['flashMessage'] = 'Impossible d\'ajouter le billet !';
                    }
                else {
                    $_SESSION['flashMessage'] = 'votre article a bien été ajouté !';
                    require('view/backend/adminView.php');   
                    }
            }           
    else {
            $_SESSION['flashMessage'] = 'Auteur ou contenu vide !';
            require('view/backend/adminAddPostView.php') ;
        }    
}

function editPost()

{

    $postId = $_GET['id'];

    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $posts=$postManager->getPost($postId);

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getCommentsAdmin($_GET['id']);

    require('view/backend/adminPostView.php');
}

function updateP()

{

	if (!empty($_POST['title']) && !empty($_POST['content'])) {

        $postId = $_GET['id']; 

        $postManager = new PostManager();
        $commentManager = new CommentManager();
    
        $updatedPostLines = $postManager->updatePost($_POST['title'],$_POST['content'],$postId); 

               
 		$posts = $postManager->getPosts(); 
    	$comments = $commentManager->getComments($_GET['id']);
        }
    else {
        $_SESSION['flashMessage'] = 'Tous les champs ne sont pas remplis !';
  	} 

  	if ($updatedPostLines === false) {
        $_SESSION['flashMessage'] = 'Impossible de modifier le billet !';
    }
    else {  
        header('Location: index.php?action=editPost&id=' . $postId); 
    } 

} 


function deleteP()
{
    $postId = $_GET['id'];

    $postManager = new PostManager();
 
    $deletedPostLines = $postManager->deletePost($postId);

    $posts = $postManager->getPosts();

     if ($deletedPostLines === false) {

        $_SESSION['flashMessage'] = 'Impossible de supprimer le billet !';
    }
    else {
        header('Location: index.php?action=login');
    }   
}
