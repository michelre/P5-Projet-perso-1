<?php

namespace App\Dao;


use PDO;

class BaseDao
{
    protected $db;

    public function __construct()
    {
		$this->db =new PDO('mysql:host=localhost;dbname=projet 5;charset=utf8', 'root', '');
    }


}
