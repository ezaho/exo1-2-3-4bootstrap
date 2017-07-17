<?php
  function maFonction($maVar){
       $maVar="true";
      return $maVar;
     }
       $resultat = maFonction($maVar);
       echo $resultat;
echo "<hr>";
   function maChaine($maVar){
      $maVar="caracteres";
     return $maVar;
     }
       $affiche=maChaine($maVar);
      echo $affiche;
echo "<hr>";
    function maChainCar($a,$b){
      $a="azerty";
      $b="qw.$a";
      return $b;
    }
      $lire=maChainCar($b);
    echo $lire;
echo "<hr>";

      function mesNbres($nombre1,$nombre2){
        $nombre1=3;
        $nombre2=27;
      if ($nombre1>$nombre2) {
          $z="Le premier nombre est plus grand";
          echo $z;
      }

       if ($nombre1<$nombre2) {
          $z="Le premier nombre est plus petit ";
          echo $z;
       }
      if ($nombre1==$nombre2) {
          $z="Les deux nombres sont identiques";
          echo $z;
      }
      return $z;
      }
      echo mesNbres();

echo "<hr>";
     function nombcarac($nbr1,$carac1){
       $nbr1=13;
       $carac1="ytreza";
       $y=$nbr1."ytreza";
       return $y;
     };
     $v=nombcarac($y);
     echo $v;
echo "<hr>";
function person($nom,$prenom,$age){
  $nom="claes";
  $prenom="paul";
  $age=39;
  $np=$nom . $prenom;
  $npage="$np.tu as.$age.ans ";
  return $npage;
}
echo "Bonjour! ". person();

echo "<hr>";
  function genrage($genre,$age){
    $age= 12 ;
    $genre= "femme" ;
    if ($age>=18) {
      if($genre=="homme"){
        echo "vous ètes un homme et vous ètes majeur";
      }elseif ($genre=="femme") {
       echo "vous ètes majeure et vous ètes une femme ";
      }
    }
    else{
      if($genre=="homme"){
        echo "vous ètes un homme et vous ètes mineur";
      }elseif ($genre=="femme") {
       echo "vous ètes mineure et vous ètes une femme ";
      }
    }
    return;
  };
      echo genrage();

echo "<hr>";
      function somnbr($var1,$var2,$var3){
        $var1=5;
        $var2=10;
        $var3=15;
        $z=$var1+$var2+$var3;
        return $z;
      }
      echo somnbr();
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
