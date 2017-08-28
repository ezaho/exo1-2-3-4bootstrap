<?php

try {
  $dbh = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'user');
} catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
//on stocke dans la variable le resultat de la requete afficher tous les clients
$resuclients=$dbh->query('SELECT * FROM clients ');
//on stocke dans la variable le resultat de la requete afficher tous les types de spectacle
$shows=$dbh->query('SELECT * FROM shows ');
//on stocke dans la variable le resultat de la requete afficher les 20 premiers clients
$premclients=$dbh->query('SELECT * FROM clients WHERE id <=20');
//on stocke dans la variable le resultat de la requete afficher les clients avec CallbackFilterIterator
$cardclients=$dbh->query('SELECT * FROM clients WHERE CARD =1');
//on stocke dans la variable le resultat de la requete afficher les clients M ordre alphabetique
$alphaclients=$dbh->query('SELECT * FROM clients WHERE lastName LIKE"m%" ORDER BY lastName ASC ');
//afficher spectacle selon titre artiste DOMCdataSection
$spectacle=$dbh->query('SELECT*FROM shows WHERE title ORDER BY title ASC');
//  afficher fiche individuel des clients
$ficheclients=$dbh->query('SELECT*FROM clients');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PDO partie 1 lire les données</title>
  </head>
  <body>
<ul>
  <h3>tous clients</h3>
  <!-- EXERCICE 1 -->
        <?php
              while ($don = $resuclients->fetch())
         {?>
               <li>
         <?php
               echo $don['lastName'];?>
              </li>
           <?php  }
          $resuclients->closeCursor();
         ?>
</ul>

<hr>
<ul>
 <h3>tous les types spectacles </h3>
 <!-- EXERCICE 2 -->
         <?php
             while ($don = $shows->fetch())
         {?>
             <li>
        <?php
              echo $don['title'];?>
           </li>
        <?php  }
              $shows->closeCursor();
          ?>
  </ul>
  <hr>
  <ul>
    <h3>les 20 premiers clients</h3>
    <!-- EXERCICE 3 -->
         <?php
         while ($don = $premclients->fetch())
     {?>
         <li>
          <?php
              echo $don['lastName']." ".$don['firstName'];
           ?>
         </li>
          <?php }
              $premclients->closeCursor()
           ?>
    </ul>
    <hr>
    <ul>
    <h3>les clients avec carte</h3>

  <!-- EXERCICE 4 -->
          <?php
          while ($don = $cardclients->fetch())
      {?>
          <li>
     <?php
           echo $don['card']."  ".$don['firstName']." ".$don['lastName'];?>
        </li>
     <?php  }
           $cardclients->closeCursor();
            ?>
  </ul>
  <hr>
  <h3>les clients M par ordre alphabetique</h3>
   <ul>
      <!-- EXERCICE 5 -->
      <?php
      while ($don =$alphaclients->fetch())
  {?>
      <li>
 <?php
       echo $don['lastName']." "."<br>";
       echo$don['firstName'];
    ?>
    </li>
 <?php  }
       $alphaclients->closeCursor();
        ?>
   </ul>
<hr>
<ul>
   <h3>les titres et artistes des spectacles </h3>
   <!-- EXERCICE 6 -->
   <?php
   while ($don = $spectacle->fetch())
{?>
   <li>
<?php
    echo $don['title']." ". $don['performer']." ". $don['Date']." ".$don["startTime"];?>
 </li>
<?php  }
     $spectacle->closeCursor();
     ?>
</ul>
<hr>
<h3>les clients  par info individuel </h3>
<ul>
<!-- EXERCICE 7 -->
   <?php
   while ($don = $ficheclients->fetch())
{?>
   <li>
      <?php
        echo $don['lastName']." "."<br>";
        echo $don['firstName']." "."<br>";
        echo $don['birthDate']." "."<br>";
        echo $don['card']." "."<br>";
        echo $don['cardNumber']." "."<br>";
     ?>
  </li>
<?php  }
    $ficheclients->closeCursor();
    ?>
</ul>
  </body>
</html>
