<?php

namespace App\Model;

class Comment
{

    private $id;
    private $author;
    private $comment;
    private $date_creation;
    private $recette_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this-> date;
    }

    /**
     * @param mixed $date_creation
     */

	public function setDateCreation($date)
    {
        $this->date = $date;
    }
      
    public function getrecetteId()
    {
        return $this-> recetteId;
    }


	public function setrecetteId($recetteId)
    {
        $this->date = $recetteId;
    }

}
