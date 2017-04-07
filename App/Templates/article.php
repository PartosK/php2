<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новость</title>
</head>
<body>
<?php

if ((isset($id) AND (false !== $data) ))
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
  Автор:  <?php if ( null !== $data->author)
                 {
                     echo $data->author->author;
                 } ?>
<?php }
else{   ?>

Нет такой новости: <a href="/index.php" >Главная страница</a>

<?php } ?>
</body>
</html>