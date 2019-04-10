<?php

namespace Tests\POOblog\model;

require_once("model/Manager.php"); // Vous n'alliez pas oublier cette ligne ? ;o)

class UserManager extends Manager
{
    
      public function getUserByIdent($user_name)
    {
        $db = $this->dbConnect();
        $reqUsers = $db->prepare('SELECT user, login  FROM users WHERE user = ?');
        $reqUsers->execute(array($user_name));
        if($reqUsers === false) return null; 

        $user = $reqUsers->fetch();

        return $user;
    } 


}