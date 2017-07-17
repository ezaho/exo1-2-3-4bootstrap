<?php

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // Si les données sont passés en POST => les données doivent être affichés
    if (isset( $_POST["nom"])) {
       echo 'Bonjour ' . $_POST["genre"] . $_POST["nom"] .$_POST["prenom"];
    }
    // si les données ne sont pas passés => les formulaires seront affichés
    else{


     ?>
    <form  action="user.php" method="get">
      Nom: <input type="text" name="nom" ><br>
      Prenom: <input type="text" name="prenom" ><br>
      <input type="submit" >
    </form>
    <hr>
    <form action="user.php" method="post">
      Nom: <input type="text" name="nom" ><br>
      Prenom:<input type="text" name="prenom" ><br>
      <input type="submit" >
    </form>
         <hr>
         <!--5è exercice-->
     <form  action="" method="post">
       votre civilité:
           <select  name="genre">
             <option value="Mr">Mr</option>
             <option value="Mme">Mme</option>
           </select><br>
               Nom:<input type="text" name="nom" ><br>
            Prénom :<input type="text" name="prenom"><br>
           <input type="submit" >
     </form>
     <hr>
     <!--6è exercice le formulaire rempli disparait-->

<?php } ?>
  </body>
</html>
