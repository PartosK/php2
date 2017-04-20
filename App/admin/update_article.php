<?php

require __DIR__ . '/../../autoload.php';

$data = \App\Models\Article::findById($_GET['id']);

include __DIR__ . '/../../App/Templates/admin/adminUpdate.php';

if (isset($_POST['save'])) {



    $news = \App\Models\Article::findById($_GET['id']);
    var_dump($news);
    $news->title = $_POST['title'];
    $news->lead = $_POST['lead'];
   var_dump($news);
   /* $news->save();
    header('Location: /App/admin/index.php');*/
}
