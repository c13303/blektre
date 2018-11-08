<?php 
 // endroit texte
$action1='place ="Eglise de Fientologie"';

// chemin de retour
$action2='retour="paris/eglise/12eglise"';

//eventuelle préaction
// $action3='place =""';

require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];

$rael=check_special('rael');
$coeur=check_special('coeur');
$endroit="dans l'église de Fientologie";
$_SESSION['endroit']=$endroit;

 ?>
 
<div id="texte">
  <p>Vous entrez dans la grande batisse en pierre et vous &ecirc;tes profond&eacute;mment &eacute;mu de voir que le sacr&eacute; a encore sa place en ce bas monde. </p>
  <p>L'&eacute;glise est connue pour ses services de <strong>d&eacute;sintoxications</strong> et les divers <strong>miracles</strong> qu'elle r&eacute;alise. Elle est aussi connue pour ses danseuses nues et le gouffre a fric qu'elle represente dans l'économie de la ville.</p>

  <?php
	
	if($nom!=$rael)
	{
	echo "Un type en pyjama si&egrave;ge derri&egrave;re un bel autel, une bouteille de vin de messe &agrave; la main, un cigare-cierge dans l'autre. Il s'agit du Ra&euml;l ".$rael.", illumin&eacute; par les martiens. ";
	$m1="Je vais voir le rael";
	$v1="paris/eglise/12eglise_rael";
	$m2="Je fais une prière";
	$v2="paris/eglise/12priere";
	}
	else
	{
	echo "Vous êtes le Rael de l'église.";
	$m1="Je check mon biz de Rael";
	$v1="paris/eglise/12biz_rael";
	}
	
	if($nom!=$coeur)
	{
	echo "<p>Un enfant de coeur fume une clope dans un coin. Il s'agit de ".$coeur;
	$m3="Je vais voir l'enfant de coeur";
	$v3="paris/eglise/12coeur";
	}
	else
	{
	echo "Vous êtes l'enfant de coeur de l'église.";
	$m3="Je check mon biz d'enfant de coeur";
	$v3="paris/eglise/12becoeur";
	}
	
	
	
	
	
	
	
	if($present!=$rael&&$present!=$nom&&$present)
	{
	$hapen=$present;
	echo "<p>".$hapen." est à genoux, et fait semblant de prier.</p>";
	$m4="je fume ".$hapen;
	$v4="sp/fume";
	}
	
	
	
	
	
	
	$m5="Je me tire de cette putain de secte";
	$v5="paris/_street/streetouest";


	$perso2=$coeur;
	$perso3=$rael;
	$_SESSION['flashsene']='12eglise';


    ?>
  

  
</p>
 
<?php  ?>

 
























