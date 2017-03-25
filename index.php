<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Последние новости</title>
</head>
<body>
<a href="/App/Templates/admin.php" >Админка</a>
</li>
<?php

require_once __DIR__ . '/autoload.php';

$data = App\Models\Article::lastNews();  ?>

<ul>
     <?php  foreach ($data as $news ){   ?>
     <li>
          <a href="/App/Templates/Article.php?id=<?php echo $news->id; ?>" ><?php echo $news->title; ?></a>
     </li>
      <?php  }  ?>
</ul>
</body>
</html>