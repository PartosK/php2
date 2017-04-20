<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>
<body>

<form>
    <a href="/Admin/Insert/" >Новая новость</a>
</form>
<ul>
    <?php  foreach ($data as $news ){   ?>
        <li>
            <?php echo $news->title; ?>
            <a href="/Admin/Update/?id=<?php echo $news->id; ?>" >Редактировать </a>
            <a href="/Admin/Deleted/?id=<?php echo $news->id; ?>" > Удалить</a>
        </li>
    <?php  }  ?>
</ul>


</body>
</html>

<?php


?>