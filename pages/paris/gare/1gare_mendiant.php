
<?php

 $action1='place ="Gare"';
$action2="retour='paris/gare/1gare'";
include("include/panel.php"); 

$clodo=check_special('clochard');

$hapen=$clodo;
?>

<div id="texte">
<?php 
$vanne=check_title('clochard');


echo " <p>Vous vous approchez du clochard qui tape la manche, qui s'av&egrave;re &ecirc;tre le pauvre ".$clodo." Faut croire qu'il a mal tourné. </p>
  <p>-".$vanne.", dit il en rigolant. </p>
  <p>&nbsp;</p>";
  $m1="Je lache 10 euros parce qu'il me fait marrer";
$v1="paris/gare/1gare_mendiant_avenir";
$m2="Je fume cette petite merde";
$v2="paris/gare/1gare_fumeclodo";




$m3="Je m'éloigne";
$v3="paris/gare/1gare";
$_SESSION['flashsene']='1gare_mendiant';
 

?>
 
<?php  ?>

 
