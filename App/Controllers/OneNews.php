<?php

namespace App\Controllers;


use App\Controller;

class OneNews
  extends Controller
{

    public function actionIndex()
    {
        $id = $_GET['id'];
        $this->view->id = $id;

        $this->view->data = \App\Models\Article::findById($id);
        $this->view->display(__DIR__ . '/../../App/Templates/article.php');

    }
}