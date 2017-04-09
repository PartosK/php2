<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>
<body>

<form>
    <a href="/Admin/Insert" >Новая новость</a>
</form>
<ul>
    <?php  foreach ($data as $news ){   ?>
        <li>
            <form method="POST" action="/Admin/Deleted/" >
                <a href="/Admin/Edit/?update=<?php echo $news->id; ?>" ><?php echo $news->title; ?></a>
                <button name="deleted" value="<?php echo $news->id; ?>">Удалить</button>
           </form>
        </li>
    <?php  }  ?>
</ul>


</body>
</html>

<?php


?>