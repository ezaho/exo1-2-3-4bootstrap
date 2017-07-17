<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
    <ul>
      <?php
$animal=array(
  'lion'=>'lion.php',
  'impala'=>'impala.php',
  'tigre'=>'tigre.php',
  'elephant'=>'elephant.php',
  'crocodile'=>'crocodile.php',
  );
  foreach ($animal as $key => $value) {?>
<li><a href="index.php?animal=<?php echo $key ?>">photos de l'animal   </a></li>
<?php  }?>
  </ul>

</header>
