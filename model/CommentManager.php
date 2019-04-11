<?php

namespace Tests\POOblog\model;


require_once("model/Manager.php");

class CommentManager extends Manager

{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

     public function getSignaledComments()
    {
        $db = $this->dbConnect();
        $reqsignal = $db->query('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE  priority = 1 ORDER BY post_id DESC');

        return $reqsignal;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function getComment($commentId)
    {
        $db = $this->dbConnect();
        $comment = $db->prepare('SELECT id, author, comment, post_id, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id = ? ORDER BY comment_date DESC');
        $comment->execute(array($commentId));

        return $comment;
    }

    public function updateComment($commentId, $author, $comment,$postId, $priority)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('UPDATE comments SET author=?, comment=?, priority= ? WHERE id = ?');
        $updatedLines = $comments->execute(array( $author, $comment, $priority, $commentId ));

        return $updatedLines;
    }

    public function signalComment($commentId, $postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('UPDATE comments SET priority= 1 WHERE id = ?');
        $signaledLines = $comments->execute(array($commentId ));

        return $signaledLines;

    }
    public function getCommentsAdmin($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY priority AND comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }


     public function deleteComment($commentId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('DELETE FROM comments WHERE id = ?');
        $deletedLines = $comments->execute(array( $commentId));
       
        return $deletedLines;
    }

}
