<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php 


 $action1='best = best+250';
$action2='money = money+150';
$action2='sex = sex-500';
include("include/panel.php"); 

$hapen=check_special('directeur');
$bonus1='score';
$top=check_special('top');

?>
<div id="texte">
<p>Vous engloutissez le vermisseau du directeur <b><?php echo $hapen; ?></b> qui se met &agrave; pisser. Vous d&eacute;gueulez promptement, mais le directeur, loin de vous en tenir rigueur, semble plut&ocirc;t satisfait. </p>
<p>- Ok, ok. Je vais parler de toi au concessionnaire 4x4 <?php echo $top; ?> qui habite à Ivry.  C'est plutôt bien payé.
  <?php
  in_log($nom,'Vous sucez '.$hapen.', le directeur','miam');
  in_log($hapen, $nom.' vous suce pour avoir une promotion','la routine');
  in_log($nom,'Vous avez un plan taf à Ivry','250 pts');

in_point($id,'piston4x4');


$m2="Merci monsieur le directeur";
$v2=$retour;
$_SESSION['flashsene']='suce';


 
 
?>
</p>
