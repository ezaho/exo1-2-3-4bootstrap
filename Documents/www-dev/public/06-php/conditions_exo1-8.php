<?php

//1er exercice age, majeur,mineur
$age=32;
$affichage_exo1 = "";
if ($age >= 18) {

  $affichage_exo1 = "vous ètes majeur";
}else{
  $affichage_exo1 = "vous ètes mineur";
}


//2e exercice facile/diff
$IsEasy=false;
if ($IsEasy==true) {
    $affichage_exo2= "c'est facile";
}else{
  $affichage_exo2="c'est difficile";
}
//3e exercice age ,homme ou femme maj,min
$age= 42 ;
$affichage_exo3="";
$genre= "femme" ;
if ($age>=18) {
  if($genre=="homme"){
    $affichage_exo3= "vous ètes un homme et vous ètes majeur";
  }elseif ($genre=="femme") {
    $affichage_exo3="vous ètes majeure et vous ètes une femme ";
  }
}
else{
  if($genre=="homme"){
    $affichage_exo3= "vous ètes un homme et vous ètes mineur";
  }elseif ($genre=="femme") {
   $affichage_exo3= "vous ètes mineure et vous ètes une femme ";
  }
}




//4è exercice_4 magnitude 1 à 9
$magnitude=11;
$affichage_exo4="";
  switch ($magnitude) {
    case 1:
      $affichage_exo4= "magnitude1:  Micro-séisme impossible à ressentir.";
    break;
    case 2:
       $affichage_exo4="magnitude2:  Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
    break;
    case 3:
       $affichage_exo4= "magnitude3:   Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
      break;
    case 4:
       $affichage_exo4= "magnitude4:   Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
      break;
    case 5:
    $affichage_exo4= "magnitude5:  Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
      break;
      case 6:
    $affichage_exo4= "magnitude6:  Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
      break;
    case 7:
    $affichage_exo4= "magnitude7:   Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
    break;
    case 8:
    $affichage_exo4= "magnitude8:    Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
    break;
    case 9:
    $affichage_exo4= "magnitude9: Séisme capable de tout détruire sur une très vaste zone. ";
        break;
    default:
      $affichage_exo4= "magnitude non defini dans l'échelle de richter";
      break;
  }

//5è exercice homme,femme,developper
     $maVariable="femme";
     $affichage_exo5="";
     if ($maVariable != "homme") {
       $affichage_exo5= "c'est une developpeuse";
     }
       else {
         $affichage_exo5= "c'est un developpeur";
       }

//6è exercice majeur
     $monAge=7;
     $affichage_exo6="";
     if ($monAge >=18) {
         $affichage_exo6 ="tu es  majeur";
            }
            else {
              $affichage_exo6= "tu n'es pas majeur";
            }
//7è exercice bon ,pas bon
     $maVariable=true;
     $affichage_exo7="";
     if ($maVariable===false) {
       $affichage_exo7="c'est pas bon";
     }else {
       $affichage_exo7="c'est ok!!!";
     }

    $maVariable=0;
    $affichage_exo8="";
    if ($maVariable===0) {
      $affichage_exo8= " c'est ok!!!";
    }else {
      $affichage_exo8= "c'est pas bon";
    }


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
<h3>Exercice 01</h3>
<?php
echo $affichage_exo1;
 ?>
 <h3>Exercice 02</h3>
 <?php
 echo $affichage_exo2;
  ?>
  <h3>Exercice 03</h3>
  <?php
  echo $affichage_exo3;
   ?>
   <h3>Exercice 04</h3>
   <?php
   echo $affichage_exo4;
    ?>
    <h3>Exercice 05</h3>
    <?php
    echo $affichage_exo5;
     ?>
     <h3>Exercice 06</h3>
     <?php
     echo $affichage_exo6;
      ?>
      <h3>Exercice 07</h3>
      <?php
      echo $affichage_exo7;
       ?>
       <h3>Exercice 08</h3>
       <?php
       echo $affichage_exo8;
        ?>
   </body>
 </html>
