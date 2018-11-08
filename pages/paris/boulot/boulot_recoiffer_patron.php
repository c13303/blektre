<?php

 $action2='sex=sex+10';
$action3='';
$bonus12="sex";
include("include/panel.php"); 

$patron=mysqli_fetch_assoc(requete('SELECT player FROM special WHERE nom="patron";'));
?>
<div id="texte">
<p>Monsieur <?php echo $patron['player']; ?>, votre patron, semble relativement &eacute;mu par votre geste. Il vous adresse un regard de biche. Les autres personnes pr&eacute;sentes d&eacute;tournent le regard.</p>
<p>- <b><?php echo $nom; ?></b> ... Bon vous m'expliquerez tout &ccedil;a tout &agrave; l'heure. </p>
<p>&nbsp;</p>

  <?php if($present)
{
$hapen=$present;
echo $present." semble être un peu jaloux.<br/>";
}
  

  in_log($nom,"Vous recoiffez le patron","hum .. hum..");
  in_point($id,"dragueboss");
  
  $m1="Je reste tranquille jusqu'&agrave; la fin de la r&eacute;union.";
$v1="paris/boulot/boulotfinreunion";
$m2=" Je sors en m'excusant";
$v2="paris/boulot/boulotfuite";
$m3="Je lui demande poliment de ne pas me casser les couilles 
  et de continuer sa petite r&eacute;union de merde, de fa&ccedil;on professionnelle s'il vous plait.";
$v3="paris/boulot/boulotreunionvener";
  
  
    ?>

  
 
<?php 
$_SESSION['flashsene']='recoiffer_patron';
$perso2=check_special('patron');
 ?>

 



