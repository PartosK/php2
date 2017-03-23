<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новость</title>
</head>
<body>
<?php
 $id = $_GET['id'];

 require __DIR__ . '/../Article.php';

$data = Article::findById($id);

?>
<header>
<h1>
    <?php echo $data->title; ?>
</h1>
</header>
<article>
    <?php echo $data->lead; ?>
</article>


</body>
</html>