<?php

namespace App\Controller;

use App\Dao\CommentDao;
use App\Dao\RecetteDao;

class FrontendController
{
    private $commentDao;
    private $recetteDao;

    public function __construct()
    {
        $this->commentDao = new CommentDao();
        $this->recetteDao = new RecetteDao();
    }

    public function home()
    {
        $comments = $this->commentDao->getGlobalComments();

        require(__DIR__ . '/../view/base.php');
    }

    public function menus($type)
    {
        $recettes = [];
        if ($type === 'burgers') {
            require(__DIR__ . '/../view/menu_burgers.php');
        }
        if ($type === 'salades') {
            require(__DIR__ . '/../view/menu_salades.php');
        }
    }

    public function burgers($type)
    {
        $recettes = $this->recetteDao->getRecettes($type);
        if ($type == 1) {
            require(__DIR__ . '/../view/burgers_boeuf.php');
        }
        if ($type == 2) {
            require(__DIR__ . '/../view/burgers_poulet.php');
        }
    }

    public function salades()
    {
        require(__DIR__ . '/../view/salades.php');
    }

    public function drinks()
    {
        require(__DIR__ . '/../view/boissons.php');
    }

    public function desserts()
    {
        require(__DIR__ . '/../view/desserts.php');
    }

    public function avis()
    {
        require(__DIR__ . '/../view/avis.php');
    }

    public function addComment($author, $comment)
    {
        $this->commentDao->create($author, $comment);

    }
}
