<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>
<body>

<form>
    <a href="/article.php?insert=1" >Новая новость</a>
</form>
<ul>
    <?php  foreach ($data as $news ){   ?>
        <li>
            <form method="POST" action="admin.php" >
                <a href="/article.php?update=<?php echo $news->id; ?>" ><?php echo $news->title; ?></a>
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
    header('Location: /admin.php');
}

?>