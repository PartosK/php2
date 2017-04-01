<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новость</title>
</head>
<body>
<?php

if (isset($id))
{
    ?>
    <header>
        <h1>
            <?php echo $data->title; ?>
        </h1>
    </header>
    <article>
        <?php echo $data->lead; ?>
    </article>
<?php }
elseif (isset($update_id))
{
    ?>
    <form action="/article.php" method="POST">
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
<?php }
else
{ ?>

    <form action="article.php" method="POST">
        Заголовок:<input type="text" name="title" ><br>
        Новость:<textarea  name="lead" ></textarea>
        <button name="save">Сохранить</button>
    </form>
<?php } ?>


</body>
</html>

<?php


?>