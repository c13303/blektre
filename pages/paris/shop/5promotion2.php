<?php 


 $action1='best = best+250';
$action2='money = money+150';
$action2='sex = sex-500';
include("include/panel.php"); 

$hapen=check_special('directeur');
$bonus1='score';

?>
<div id="texte">
<p>Vous engloutissez le vermisseau du directeur <b><?php echo $hapen; ?></b> qui apparemment n'a pas donn&eacute; de promotion depuis longtemps &agrave; en croire l'odeur naus&eacute;abonde de son entretien d'embauche. Il se met &agrave; grogner et finit par se soulager dans votre bouche. Il referme son pantalon en soupirant.</p>
<p>- Ok, ok. Bon. Je te mute à la boutique d'accessoire. Tu gagneras probablement un peu plus de blé.
  <?php
  $ex=check_special('vendeuse');
  in_log($nom,'Vous sucez '.$hapen.', le directeur','miam');
  in_log($hapen, $nom.' vous suce pour avoir une promotion','la routine');
  in_log($ex,'Vous êtes virée','loser');
  in_log($nom,'Vous êtes promu vendeuse','suceuse');

set_special($nom,'vendeuse');
set_special('Blektre','voyante');


$m2="Merci monsieur le directeur";
$v2=$retour;


$_SESSION['flashsene']='suce';
 
 
?>
</p>
