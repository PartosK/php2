<?php

namespace App\Controllers;


use App\Controller;

class Index
  extends Controller
{

    public function actionIndex()
    {

        $this->view->data = \App\Models\Article::lastNews();
        $this->view->display(__DIR__ . '/../../App/Templates/index.php');
    }
}