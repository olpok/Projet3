<?php

namespace Tests\POOblog\model;

require_once("model/Manager.php"); // Vous n'alliez pas oublier cette ligne ? ;o)

class PostManager extends Manager
{
      public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

     public function postPost($title, $content)
    {
        $db = $this->dbConnect();
        $posts = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES(?, ?, NOW())');
        $addedLines = $posts->execute(array($title, $content));

        return $addedLines;
    }

	public function updatePost($title, $content, $postId)
	{    	
		
        $db = $this->dbConnect();
    	$posts = $db->prepare('UPDATE posts SET title=?, content=? WHERE id = ?');
        $updatedPostLines = $posts->execute(array( $title, $content, $postId));

        return $updatedPostLines;
	}

    public function deletePost($postId)
    {
        $db = $this->dbConnect();
        $posts = $db->prepare('DELETE FROM posts WHERE id = ?');
        $deletedPostLines = $posts->execute(array($postId));

        return $deletedPostLines;
    }
}