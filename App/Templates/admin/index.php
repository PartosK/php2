<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>
<body>

<form>
    <a href="/App/admin/insert_article.php" >Новая новость</a>
</form>
<ul>
    <?php  foreach ($data as $news ){   ?>
        <li>
            <?php echo $news->title; ?>
            <a href="/App/admin/update_article.php?id=<?php echo $news->id; ?>" >Редактировать </a>
            <a href="/App/admin/deleted_article.php?id=<?php echo $news->id; ?>" > Удалить</a>
        </li>
    <?php  }  ?>
</ul>


</body>
</html>

<?php


?>