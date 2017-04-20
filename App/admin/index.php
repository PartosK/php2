<?php

    require_once __DIR__ . '/../../autoload.php';

    $data = \App\Models\Article::findAll();

    include __DIR__ . '/../Templates/admin/index.php';

/*
    if(isset($_GET['insert'])) {

        include __DIR__ . '/App/Templates/adminInsert.php';

    }
    elseif (isset($_GET['update'])) {
         $update_id = $_GET['update'];

         $data = \App\Models\Article::findById($update_id);

         include __DIR__ . '/App/Templates/adminUpdate.php';

     }

    if (isset($_POST['deleted'])) {

    $del = new App\Models\Article();
    $del->id = $_POST['deleted'];
    $del->delete();
    header('Location: /index.php');

    }

     if (isset($_POST['save'])) {

            if (isset($_POST['id'])) {
                 $id = $_POST['id'];
                            }
             else {
                  $id = null;
                  }

    $news = new \App\Models\Article();

    $news->title = $_POST['title'];
    $news->lead  = $_POST['lead'];
    $news->id    = $id;
    $news->save();
    header('Location: /index.php');

    }*/