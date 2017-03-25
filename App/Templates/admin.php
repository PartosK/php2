<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>
<body>
<?php
require_once __DIR__ . '/../../autoload.php';

$data = \App\Models\Article::findAll();

?>
<form>
    <a href="/App/Templates/Article.php?insert=1" >Новая новость</a>
</form>
<ul>
    <?php  foreach ($data as $news ){   ?>
        <li>
            <form method="POST" action="admin.php" >
                <a href="/App/Templates/Article.php?update=<?php echo $news->id; ?>" ><?php echo $news->title; ?></a>
                <button name="deleted" value="<?php echo $news->id; ?>">Удалить</button>
           </form>
        </li>
    <?php  }  ?>
</ul>


</body>
</html>

<?php

if (isset($_POST['deleted']))
{
    $del = new App\Models\Article();
    $del->id = $_POST['deleted'];
    $del->delete();
    header('Location: /App/Templates/admin.php');
}

?>