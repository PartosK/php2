<?php

namespace App\Controllers;


use App\Controller;

class AllNews
  extends Controller
{

    public function actionIndex()
    {

        $this->view->data = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../../App/Templates/allArticles.php');

    }
}