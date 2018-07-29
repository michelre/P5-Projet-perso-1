<?php

namespace App\Dao;

use App\Model\Recette;
use PDO;

class RecetteDao extends BaseDao
{

    public function getRecettes($typeId)
    {
        $stmt = $this->db->prepare("SELECT * FROM recette WHERE type_id = ?");
        $stmt->execute([$typeId]);
        $recettes = array();
        while ($recette = $stmt->fetchObject(Recette::class)) {
            array_push($recettes, $recette);
        }
        return $recettes;
    }

    public function create($name, $content)
    {

        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
            return $this->db->prepare('INSERT INTO recette(name, content) VALUES(?, ?)')
                ->execute([$name, $content]);
        } catch (PDOEXception $exception) {
            echo $exception->getMessage();
        }


    }
}
