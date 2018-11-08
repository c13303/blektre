
<?php

 $action1='place ="3, rue des Glands"';
$action2="retour='paris/_street/streetest'";

include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$dj=check_special('tube');
$josielover=check_special('josie_lover');
$endroit="chez ".$josielover;

?>
<div id="texte">
  <p>Vous chopez fermement le cr&acirc;ne de <?php echo $josielover; ?> en pleine main et le projetez contre le coin de la table basse. </p>
  <p>Vous recommencez ce geste &agrave; plusieurs reprises jusqu'&agrave; ce que vous repreniez vos esprits, tandis que lui a totalement perdus les siens. &quot;Bordel&quot;, vous dites vous pour vous m&ecirc;me. </p>
  <p>&nbsp;</p>


  
  <?php
in_log($josielover, 'Vous vous êtes fait déchirer par '.$nom.', un soupirant de Josiane','aie');
in_log($nom, 'Vous avez défoncé le copain de Josiane','ce con de '.$josielover);
update_stat($nom,'karma','-1000');
in_point($id,'fumelover');
$malus12="karma";
$malus22="life";

update_stat($josielover,'life','-1');
update_stat($josielover,'sex','-50');
set_stat($josielover,'road1','"défoncé par ce jaloux de '.$nom.' pour une histoire de gonzesse"');



$entree='';
$entree2='';


$m4="Je lui crache dessus et je me tire";
$v4="paris/_street/streetest";     
     





    ?>
 
<?php 
$_SESSION['flashsene']='josielover_explose';
$perso2=$josielover;
 ?>

 
