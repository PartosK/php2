<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Последние новости</title>
</head>
<body>
<?php

require_once __DIR__ . '/Article.php';

$data = Article::lastNews();  ?>

<ul>
     <?php  foreach ($data as $news ){   ?>
     <li>
          <a href="/template/Article.php?id=<?php echo $news->id; ?>" ><?php echo $news->title; ?></a>
     </li>
      <?php  }  ?>
</ul>
</body>
</html>