<?php
require_once __DIR__ . '/autoload.php';

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $data = \App\Models\Article::findById($id);

    include __DIR__ . '/App/Templates/article.php';


 }
elseif (isset($_GET['update']))
{
    $update_id = $_GET['update'];

    $data = \App\Models\Article::findById($update_id);

    include __DIR__ . '/App/Templates/article.php';

}
elseif(isset($_GET['insert']))
{
    include __DIR__ . '/App/Templates/article.php';
}
elseif (isset($_POST['save']))
{
    if (isset($_POST['id'])) { $id = $_POST['id'];}
    else {$id = null;}

    $news = new \App\Models\Article();

    $news->title = $_POST['title'];
    $news->lead  = $_POST['lead'];
    $news->id    = $id;
    $news->save();
    header('Location: /admin.php');
}