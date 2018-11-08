
<?php

 $action1='place ="gare de ivry"';
$action2='retour ="ivry/gare/091_ivry_GARE"';$_SESSION['endroit']="à la gare d'Ivry";
include("include/panel.php"); 


?>

<div id="texte">

  <p>La gare d'Ivry est fraiche. La d&eacute;coration est hideuse, mais vous vous doutez bien qu'il s'agit d'un subterfuge pour effrayer les Parisiens afin qu'ils n'arrivent pas en masse faire les touristes dans la charmante bourgade. </p>
  

 
    <?php
	$acteur=check_special('troufion');

	$present=player_present($nom,$place);
	$hapen=$present['nom'];
	
	
	if($hapen)
	{
	echo $hapen.' se ballade avec sa valise comme un bolos.';
	$m3='Je défonce '.$hapen;
	$v3="sp/fume";

	}
	
	
	$acteur=check_special('controleur');
	if ($nom==$acteur)
		{
	
		$m1="Je vais prendre un RER pour Paris";
		$v1="paris/voyage/09voyage_controleur";
		}
	else
		{
$m2="Je vais prendre un RER pour Paris";
$v2="paris/voyage/09voyagePARIS"; 
			
		}
	
	
	
	
	
	
	

$m5="Je vais a Ivry centre";
$v5="ivry/09A_ivrycenter"; 



$_SESSION['flashsene']='ivrygare';



 ?>

 
