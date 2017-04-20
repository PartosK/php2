<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Последние новости</title>
</head>
<body>

<a href="/Admin" >Админка</a>
</br>
<a href="/AllNews" >Читать все новости</a>

<ul>
     <?php  foreach ($data as $news ){   ?>
     <li>
          <a href="/OneNews/index/?id=<?php echo $news->id; ?>" ><?php echo $news->title; ?></a>
     </li>
      <?php  }  ?>
</ul>
</body>
</html>