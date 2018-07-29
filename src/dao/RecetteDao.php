<?php

namespace App\Dao;
use PDO;
use App\Model\RecetteDao;

class RecetteDao extends BaseDao
{

    public function getGlobalRecette()
    {
        $result = $this->db->query("SELECT * FROM recette where type_id");
       $recettes = array();
      while ($recette = $result->fetchObject(Recette::class)) { 
         array_push($recettes, $recette);
      } 
       return $recette;
    }

    public function create($name , $content)
    {
      
   $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
        try { 
            return $this->db ->prepare('INSERT INTO recette(name, content) VALUES(?, ?)') 
                ->execute([$name, $content]);
            }  catch (PDOEXception $exception)
        { echo $exception->getMessage(); 
    }
        
        
    }
}