<?php
  function pagination($titre,$contenu,$date){

  }

  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <?php
     $texte1=("Un pique-nique aussi facile à préparer qu’agréable à picorer ? Les recettes se concentrent en temps, pas en plaisir, pour rester plus longtemps sur l’herbe que devant les fourneaux !
				Vite faites, bien faites, les surprises du panier font appel aux magiciens de la cuisine express pour régaler sans compliquer.
				Zéro prise de tête pour les rois de la nappe à carreaux, misez sans complexes");
    $texte2=("Un pique-nique aussi facile à préparer qu’agréable à picorer ? Les recettes se concentrent en temps, pas en plaisir, pour rester plus longtemps sur l’herbe que devant les fourneaux !
					Vite faites, bien faites, les surprises du panier font appel aux magiciens de la cuisine express pour régaler sans compliquer.
					Zéro prise de tête pour les rois de la nappe à carreaux, misez sans complexes sur des idées faciles et transpirez sous le soleil plutôt que sous le tablier !");
       $fp=fopen("texte.txt","a");
       fwrite($fp,"$texte");
       fclose($fp);
         $mestextes = array('$texte1','texte2','texte3','texte4' );
          echo $mestextes;
        ?>


  </body>
</html>
