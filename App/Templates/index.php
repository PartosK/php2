<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Последние новости</title>
</head>
<body>
<a href="/admin.php" >Админка</a>
</li>


<ul>
     <?php  foreach ($data as $news ){   ?>
     <li>
          <a href="/article.php?id=<?php echo $news->id; ?>" ><?php echo $news->title; ?></a>
     </li>
      <?php  }  ?>
</ul>
</body>
</html>