<?php

namespace App\Controllers;


use App\Controller;
use App\Models\Article;
use App\Models\Authors;

class Admin
  extends Controller
{

    public function actionIndex()
    {
        $this->view->data = Article::findAll();
        $this->view->display(__DIR__ . '/../Templates/admin/index.php');

    }

    public function actionInsert()
    {
        $this->view->allauthors = Authors::findAll();
        $this->view->display(__DIR__ . '/../Templates/admin/adminInsert.php');
    }

    public function actionUpdate()
    {
        $id = $_GET['id'];
        $this->view->allauthors = Authors::findAll();
        $this->view->data = Article::findById($id);
        $this->view->display(__DIR__ . '/../Templates/admin/adminUpdate.php');
    }

    public function actionSave()
    {

        if (isset($_POST['id'])) {

            $news = Article::findById($_POST['id']);
        }
        else {
            $news = new Article();

        }

        if ($_POST['author'] == 0) {
            $author = null;
        }
        else {
            $author = $_POST['author'];
        }

        $news->fill([
            'title' => $_POST['title'],
            'lead' => $_POST['lead'],
            'author_id' => $author
        ]);

        $news->save();
        header('Location: /Admin');
    }

    public function actionDeleted()
    {
        $news = Article::findById($_GET['id']);
        $news->delete();
        header('Location: /Admin/');

    }

}