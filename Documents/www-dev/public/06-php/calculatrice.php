<?php



  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="formulaire.css">
    <link rel="stylesheet" type="text/css" href="modal.css">
    <title>calculatrice</title>
  </head>
  <body>
    <?php
      if(isset( $_POST["nombre1"])&&$_POST["nombre2"]) {
            $nombre1=$_POST["nombre1"];
            $nombre2=$_POST["nombre2"];
            $choix=$_POST["choix"];
            $resultat=0;
            if (is_numeric($nombre1)&&is_numeric($nombre2)) {
                 if ($choix=="addition") {
                  $resultat=$nombre1+$nombre2;
                  }
                  elseif ($choix=="soustraction") {
                    $resultat=$nombre1-$nombre2;
                  }
                  elseif ($choix=="division") {

                    $resultat=$nombre1/$nombre2;
                  }
                  else {
                    $resultat=$nombre1*$nombre2;
                  }
            }


            }
            else {
               echo 'erreur';
             }

     ?>
    <form action="" method="post">
<input type="text" name="nombre1" value=' <?php echo $resultat ?> 'size="5"/>
<select name="choix">
    <option value="addition">+</option>
    <option value="soustraction">-</option>
    <option value="division">/</option>
    <option value="multiplication">*</option>
</select>
<input type="text" name="nombre2" size="5"/>
<input type="submit" value="Valider" />

</form>
  </body>
</html>
