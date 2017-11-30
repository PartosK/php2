<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Все новости</title>
</head>
<body>
<ul>
     <?php  foreach ($data as $news ){   ?>
     <li>
          <a href="/News/OneNews/?id=<?php echo $news->id; ?>" ><?php echo $news->title; ?></a>
     </li>
      <?php  }  ?>
</ul>
</body>
</html>