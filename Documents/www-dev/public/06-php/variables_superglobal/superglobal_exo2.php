<?php
echo 'votre nom est ' .$_POST["nom"] . 'votre prenom ' . $_POST["prenom"]
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      Nom: <input type="text" name="nom" ><br>
      Prenom:<input type="text" name="prenom" ><br>
      <input type="submit" >
    </form>



  </body>
</html>
