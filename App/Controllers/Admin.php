<?php

namespace App\Controllers;


use App\Controller;

class Admin
  extends Controller
{

    public function actionIndex()
    {
        $this->view->data = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../../App/Templates/admin.php');

    }

    public function actionInsert()
    {
        $this->view->allauthors = \App\Models\Authors::findAll();
        $this->view->display(__DIR__ . '/../../App/Templates/adminInsert.php');
    }

    public function actionEdit()
    {
        $update_id = $_GET['update'];
        $this->view->allauthors = \App\Models\Authors::findAll();
        $this->view->data = \App\Models\Article::findById($update_id);
        $this->view->display(__DIR__ . '/../../App/Templates/adminEdit.php');
    }

    public function actionSave()
    {

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        }
        else {
            $id = null;
        }

        if ($_POST['author'] == 0) {
            $author = null;
        }
        else {
            $author = $_POST['author'];
        }


        $news = new \App\Models\Article();

        $news->title = $_POST['title'];
        $news->lead  = $_POST['lead'];
        $news->id    = $id;
        $news->author_id   = $author;
        $news->save();
        header('Location: /Admin');
    }

    public function actionDeleted()
    {

        $del = new \App\Models\Article();
        $del->id = $_POST['deleted'];
        $del->delete();
        header('Location: /Admin/');

    }

}