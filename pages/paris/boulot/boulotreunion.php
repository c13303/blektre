<?php




 $action1='';
$action2='karma=karma+30';
$action3='place="salle de réunion"';
$bonus1="karma";

include("include/panel.php"); 



 ?>
<div id="texte">
  <p>Vous prenez une chaise autour de la grande table et vous vous servez un petit verre d'eau, comme si vous vous appr&ecirc;tiez &agrave; r&eacute;unionner de fa&ccedil;on professionnelle pour le restant de la matin&eacute;e. Les autres r&eacute;unionnais commenc&egrave;rent &agrave; d&eacute;tourner leurs regards de vous, &agrave; part peut etre le patron, qui semblait attendre une vague explication.</p>
  <p>- J'avais la diarrh&eacute;e, patron. Ca arrive.<br>
    <br>
  - Vous auriez pu pr&eacute;venir, <b><?php echo $nom; ?></b>. C'est la moindre des choses. Je suis déçu. Le jour de la signature de votre CDI, qui plus est.</p>
  
  <?php 
  if($present)
{
$hapen=$present;
echo $present." se marre à gorge déployée.<br/>";
}
  
  $m1="Je reste tranquille jusqu'à la fin de la réunion. ";
$v1="paris/boulot/boulotfinreunion";
$m2="Je sussure une petite phrase salace<br/> à l'oreille du patron ";
$v2="paris/boulot/boulot_recoiffer_patron";
$m3="Je fume le patron";
$v3="paris/boulot/bureaubossfume";
  
    ?>

 
<?php
$perso2=check_special('patron');
$_SESSION['flashsene']='boulotreunion';

  ?>
 














