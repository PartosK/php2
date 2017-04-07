<?php

    require_once __DIR__ . '/autoload.php';

    $view = new App\View();

    $view->data = \App\Models\Article::findAll();
    $view->display(__DIR__ . '/App/Templates/admin.php');

    if(isset($_GET['insert'])) {

        $view->allauthors = \App\Models\Authors::findAll();
        $view->display(__DIR__ . '/App/Templates/adminInsert.php');

    }
    elseif (isset($_GET['update'])) {


        $update_id = $_GET['update'];
        $view->allauthors = \App\Models\Authors::findAll();
        $view->data = \App\Models\Article::findById($update_id);
        $view->display(__DIR__ . '/App/Templates/adminEdit.php');



     }

    if (isset($_POST['deleted'])) {

    $del = new App\Models\Article();
    $del->id = $_POST['deleted'];
    $del->delete();
    header('Location: /admin.php');

    }

     if (isset($_POST['save'])) {

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
    header('Location: /admin.php');

    }