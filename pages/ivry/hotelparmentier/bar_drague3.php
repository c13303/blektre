
<?php

 

require("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$hapen=$_SESSION['hapen'];

$hapensex=check_stat($hapen);
$hapensex=$hapensex['sex'];

$drogue=check_rank('dealer');
$drogue=$drogue['title'];


?>

<div id="texte">


  <p>Vous roulez une &eacute;norme galoche &agrave; <b><?php echo $hapen; ?></b> qui fait tournoyer sa langue p&acirc;teuse dans votre bouche. </p>
  <p>- Je n'avais jamais rien senti de tel depuis Josiane, dites vous.<b><?php echo $hapen; ?></b> sourit tendrement.</p>
  <p>Vous passez la soir&eacute;e &agrave; vous mettre des mains au cul et &agrave; vous regarder dans les yeux en vous racontant des salaceries. La fermeture du bar approchant, vous vous dites qu'il va &ecirc;tre temps de niquer.</p>
  <p></p>
  <p>&nbsp;</p>
  <p> 
    <?php
	
	in_log($nom,'Vous emballez '.$hapen, 'love story +100 points');
    in_log($hapen, $nom.' vous emballe', 'love story');
	update_stat($nom, 'best', '+100');
	$bonus1="score";

   $m1="Je raccompagne ".$hapen." et lui propose de boire un dernier verre chez moi. ";
   $v1="ivry/hotelparmentier/conclure";
   $m2="Je le viole";
   $v2="sp/fume";

$m3="Je lui dit que c'est un peu trop tôt pour moi, que je sors d'une relation difficile.";
$v3=$_SESSION['rue']; 





    ?>
  </p>
  </p>
 
<?php  ?>

 
