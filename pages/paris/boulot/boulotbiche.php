<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php
 $action1='karma = karma+10';
$action2='sex=sex+20';
$action3='';
include("include/panel.php"); 

$bonus1="karma";
$bonus12="sex";


?><div id="texte"><?php

echo "<br/>
L'assemblée vous observe avec un air ahuri. Le patron se lève et vous demande ce qui a pu vous arriver pour arriver aussi en retard.";
if($present)
{
$hapen=$present;
echo $present." pouffe de rire.<br/>";
}

  
   $m1='"Pîneu de jaguar ", dis-je d`un air désinvolte "';
$v1="paris/boulot/boulotreunionvener";
$m2="Je recoiffe négligemment le patron";
$v2="paris/boulot/boulot_recoiffer_patron";
$m3="Je m'excuse poliment et je prends place autour de la table de réunion.";
$v3="paris/boulot/boulotreunion";
$m4="Je me tire comme un ninja";
$v4="paris/boulot/boulotfuite";



$perso2=check_special('patron');
$_SESSION['flashsene']='boulotreunionvener';
 ?>

