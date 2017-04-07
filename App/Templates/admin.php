<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>
<body>

<form>
    <a href="/admin.php?insert=1" >Новая новость</a>
</form>
<ul>
    <?php  foreach ($data as $news ){   ?>
        <li>
            <form method="POST" action="/admin.php" >
                <a href="/admin.php?update=<?php echo $news->id; ?>" ><?php echo $news->title; ?></a>
                <button name="deleted" value="<?php echo $news->id; ?>">Удалить</button>
           </form>
        </li>
    <?php  }  ?>
</ul>


</body>
</html>

<?php


?>