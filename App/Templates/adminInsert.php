<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавить новость</title>
</head>
<body>
<form action="/admin.php" method="POST">
    Заголовок:<input type="text" name="title" ><br>
    Новость:<textarea  name="lead" ></textarea>
    Автор:
    <select name="author" >
        <option value="0">Нет автора</option>
        <?php


        foreach ($allauthors as $authors )
        { ?>
            <option value="<?php echo $authors->id; ?>" > <?php echo $authors->author;?> </option>
        <?php }   ?>

    </select>
    <button name="save">Сохранить</button>
</form>
</body>
</html>
