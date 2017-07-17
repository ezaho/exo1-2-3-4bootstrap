<?php
  function mydate1(){//afficher la date du jour en php
    return  date('d/m/Y H:i:s');
  }
  $exer1=mydate1();

  function mydate2(){//date du jour en format 11-07-17
    return  date('d-m-y H:i:s');
  }
  $exer2=mydate2();

  function mydate3(){
       //date en français... mais ça ne marche pas
    setlocale(LC_TIME,'french.UTF-8', 'fr_FR.UTF-8');
    return strftime(' %A %d %B %Y, %H:%M');
    }
  $exer3=mydate3();

  function mydate4(){
    return
      time("M-d-Y". mktime(15, 0, 0, 2, 8, 2016));

  }
    $exer4=mydate4();

    /*/difference de temps entre 2 dates:2 timestamp des 2 dates à soustraire
     function mydate5(){
        time();
     }
     function mydate51(){
       strtotime(2016-05-16);
     }

    function mydate(){
      return date_create();
    }
     $exer5=mydate();

    $exer6=intval(date("t"));*/
function mydate7(){
  return date("M-d-Y",strtotime("+20days"));//ajout de 20 jours après aujourd'hui
}
   $exer7=mydate7();

   function mydate8(){
     return date("M-d-Y",strtotime("-22days"));//retour 22 jours dans le passé
   }
      $exer8=mydate8();





 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
    <title>les dates</title>
  </head>  <body>
    <?php
    echo $exer1 ;
echo "<hr>";
echo "<h3>exercice2</h3>";
echo $exer2;
     echo "<hr>";
     echo "<h3>exercice3</h3>";
     echo $exer3;
  echo "<hr>";
  echo " <h3>exercice4<h3>";
  echo $exer4;
     echo "<hr>";
     echo " <h3>exercice5<h3>";
     echo $exer5;
  echo "<hr>";
  echo " <h3>exercice6<h3>";
  echo "le mois de: ". date("m-d-Y",strtotime('O2-01-2017'))." possede ". intval(date("t"))." jours";
      echo "<hr>";
     echo " <h3>exercice7<h3>";
      echo $exer7;
  echo "<hr>";
  echo " <h3>exercice8<h3>";
  echo $exer8;
       echo "<hr>";
 ?>
</body>
</html>
