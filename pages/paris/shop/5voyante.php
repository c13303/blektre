
<?php

 include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$hapen=check_special('voyante');
$voyante=$hapen;
$hapenlife=check_stat($hapen,'life');
$hapenlife=$hapenlife['life'];

?>

<div id="texte">
<?php 
if ($hapenlife>0)
{
echo " <p>Vous vous approchez de ".$hapen.", la voyante qui vous affiche un séduisant sourire edenté</p>
  <p>- Hey, gadjo, je sens que tu es perdu. Je peux voir ce que tu ne voyez pas. </p>
  <p>&nbsp;</p>";
  
  $m1="Je lache 12 euros pour qu`elle me dise l`avenir";
$v1="paris/shop/5voyante_ask";
$m2="Je fume cette petite merde";
$v2="paris/shop/5_fumevoyante";

}
  else
  {
  echo $voyante.", la voyante ne vous accueille pas avec courtoisie, ce qui vous offusque. Elle ne bouge tellement pas qu`elle finit par tomber en poussière.";
  $m1="Je prends sa place";
  $v1="paris/shop/5voyante_bethe";
  
  }
  



$m3="Je m'éloigne";
$v3="paris/shop/5commerce";

 
if($vendeuse==$nom)
{$opt1='noplayer';}
if($voyante==$nom)
{$opt1='noplayer';}

$perso2=$vendeuse;
$perso3=$voyante;
  $_SESSION['flashsene']='5voyante';
include('include/exit.php');
?>
