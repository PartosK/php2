<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новость</title>
</head>
<body>
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

</body>
</html>