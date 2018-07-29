<?php

namespace App\Dao;


class CommentDao extends BaseDao
{

    public function getGlobalComment()
    {
        return $this->db
            ->query('SELECT * FROM comment WHERE id = ' . $commentId)
            ->fetchObject(Comment::class);
        $result = $this->db->query("SELECT * FROM comment");
		
        $comments = array();
        while ($comment = $result->fetchObject(Comment::class)) {
            array_push($comments, $comment);
    }
    }

    public function getCommentByrecette($recetteId)
    {
         return $this->db
            ->query('SELECT * FROM comment WHERE id = ' . $recetteId)
            ->fetchObject(Comment::class);
    }

    public function create($commentId,$formData)
    {
        $stmt = $this->db->prepare('INSERT INTO comment(author, comment, date) VALUES(?, ?, NOW())');
        $stmt->bindParam('sss', $formData['author'], $formData['comment']);
        $stmt->execute();
    }
}
