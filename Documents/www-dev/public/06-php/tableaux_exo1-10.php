
<?php
    $mois = array('janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decmbre');
      echo $mois[1];
echo "<hr>";
      echo $mois[2];
echo "<hr>";
      echo $mois[4];

echo "<hr>";
      $mois [9]= 'Août';
      echo $mois[9];
echo "<hr>";
     $dept['1'] = 'Ain';
     $dept['03'] = 'allier';
     $dept['07'] = 'ardeche';
     $dept['15'] = 'Cantal';
     $dept['26'] = 'Drome';
     $dept['38'] = 'isère';
     $dept['42'] = 'Loire';
     $dept['43'] = 'Haute-Loire';
     $dept['63'] = 'Puy-du-dôme';
     $dept['69'] = 'Rhone';
     $dept['73'] = 'Savoie';
     $dept['74'] = 'Haute-Savoie';
     echo $dept['74'];

  echo "<hr>";
     echo $dept['69'];
echo "<hr>";
$dept['1'] = 'Ain';
$dept['03'] = 'allier';
$dept['07'] = 'ardeche';
$dept['15'] = 'Cantal';
$dept['26'] = 'Drome';
$dept['38'] = 'isère';
$dept['42'] = 'Loire';
$dept['43'] = 'Haute-Loire';
$dept['63'] = 'Puy-du-dôme';
$dept['69'] = 'Rhone';
$dept['73'] = 'Savoie';
$dept['74'] = 'Haute-Savoie';
$dept['57'] = 'ville de Metz';
echo $dept['57'];
echo "<hr>";
    $mois = array('janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decmbre');

    for ($i=0; $i <=count($mois) ; $i++) {
      echo $mois[$i].' ';
    }
echo "<hr>";
$dept['1'] = 'Ain';
$dept['03'] = 'allier';
$dept['07'] = 'ardeche';
$dept['15'] = 'Cantal';
$dept['26'] = 'Drome';
$dept['38'] = 'isère';
$dept['42'] = 'Loire';
$dept['43'] = 'Haute-Loire';
$dept['63'] = 'Puy-du-dôme';
$dept['69'] = 'Rhone';
$dept['73'] = 'Savoie';
$dept['74'] = 'Haute-Savoie';
    foreach ($dept as $key => $value) {
      echo "$value".' ';
    }
echo "<hr>";
     foreach ($dept as $key => $value) {

     echo "  le département: " .$value. " a comme numero:" .$key;
   }
 echo "<hr>";

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
