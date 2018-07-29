<?php

namespace App\Dao;
use PDO;
use App\Model\Comment;
    
class CommentDao extends BaseDao
{

    public function getGlobalComments()
    {
        $result = $this->db->query("SELECT * FROM comment where recette_id is null");
       $comments = array();
      while ($comment = $result->fetchObject(Comment::class)) { 
         array_push($comments, $comment);
      } 
       return $comments;
    }

    public function create($author , $comment ,$recetteId = null)
    {
      
   $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
        try { 
            return $this->db ->prepare('INSERT INTO comment(author, comment, date_creation, recette_id) VALUES(?, ?, NOW(), ?)') ->execute([$author, $comment, $recetteId]);
            }  catch (PDOEXception $exception)
        { echo $exception->getMessage(); 
    }
        
        
    }
}
