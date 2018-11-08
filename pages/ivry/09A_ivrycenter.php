<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php

 $action1='place ="Ivry centre"';
$action2='retour ="ivry/09A_ivrycenter"';
include("include/panel.php"); 

$_SESSION['rue']='ivry/09A_ivrycenter';
?>

<div id="texte">

  <p>Le centre de Ivry est tout comme recouvert de foutre. Après réflexion, vous comprenez qu'il s'agit de ce qu'on appelle vulgairement la neige. Vous êtes tout bonnement épaté. </p>
  <p>  Vous vous sentez succomber au charme de la banlieue. </p>
<?php


	$present=player_present($nom,$place);
	$hapen=$present['nom'];
	
	
	if($hapen)
	{
	echo $hapen.' se ballade nonchalemment, et s`amuse à gober des flocons. Quel manque de tenue, pensez vous.';
	$m4='Je défonce '.$hapen;
	$v4="sp/fume";

	}
	
	
	
	
	
	
	

	
	
$m4="Je vais dans la gare";
$v4="ivry/gare/091_ivry_GARE"; 
$m2="Je vais au Fat Burger";
$v2="ivry/fat/1fat"; 
$m3="Je vais à l'hotel Parmentier";
$v3="ivry/hotelparmentier/093_parmentier"; 
$m5="Je vais au sud d'Ivry";
$v5="ivry/periph/1periph"; 

$_SESSION['flashsene']='ivrycentre';


 ?>

 
