<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новость</title>
</head>
<body>

    <form action="/App/admin/update_article.php" method="POST">
        <header>
            <h1>
                Заголовок:<input type="text" name="title" value="<?php echo $data->title; ?>" >
            </h1>
        </header>
        <article>
                Новость:<textarea  name="lead" ><?php echo $data->lead; ?></textarea>
        </article>
        <button name="save">Сохранить</button>
        <input type="hidden" name="id" value="<?php echo $data->id; ?>" >
    </form>
</body>
</html>

<?php


?>