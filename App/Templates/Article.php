<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новость</title>
</head>
<body>
<?php
require_once __DIR__ . '/../../autoload.php';

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $data = \App\Models\Article::findById($id);

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
elseif (isset($_GET['update']))
{
    $id = $_GET['update'];

    $data = \App\Models\Article::findById($id);

    ?>
    <form action="Article.php"  method="POST">
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
elseif(isset($_GET['insert']))
{ ?>

    <form action="Article.php" method="POST">
        Заголовок:<input type="text" name="title" ><br>
        Новость:<textarea  name="lead" ></textarea>
        <button name="save">Сохранить</button>
    </form>
<?php }
else{
    header('Location: /App/Templates/admin.php');
}?>

</body>
</html>

<?php

if (isset($_POST['save']))
{    if (isset($_POST['id'])) { $id = $_POST['id'];}
    else {$id = null;}
    $news = new \App\Models\Article();
    $news->title = $_POST['title'];
    $news->lead  = $_POST['lead'];
    $news->id    = $id;
    $news->save();
    header('Location: /App/Templates/admin.php');
}
?>