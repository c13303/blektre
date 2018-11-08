
<?php

 $action1='place ="hopital"';
$action2='retour="paris/hopital/6hopital"';
include("include/panel.php"); 

$docteur=check_special('docteur');

?>

<div id="texte">

  <p>Le docteur <?php echo $docteur; ?> vous osculte. </p>
  <p>- Effectivement, vous avez chop&eacute; le DASS. Ha! Ha! Ha! Coup de bite ou seringue ? C'&eacute;tait bon ? Ha ! Ha! Ha! dit-il, les larmes aux yeux, plein d'empathie. </p>
  <p>&quot;Bon, je ne vais pas y aller par 4 chemins: vous savez qu'il n'existe pas de rem&egrave;de au SIDA. Je vais vous prescrire une chimio. Enfin, si vous en avez les moyens. 2000 euros. C'est ... politique. Histoire de s&eacute;lection naturelle, si vous voyez ce que je veux dire.</p>
 
    <?php
	

	$hapen=$docteur;
	
	
	if($money>=20000)
	{
	$m1='Je signe pour le traitement';
	$v1='paris/hopital/chimio';
	}
	else
	{
	echo '<p>Vous n`avez pas les moyens de payer. Vous chialez toutes les larmes de votre corps tandis que le médecin pouffe discrètement dans sa blouse.</p>';
	$m1='Je le fume';
	$v1='paris/hopital/6fume_docteur';
	
	}
	
	
	
	
	$m5='Je me tire';
	$v5='paris/_street/streetnord';
	
	
	
	


$m5="Cet endroit pue la mort. Je me tire.";
$v5="paris/_street/streetnord"; 







    ?>
    
    
    <?php 
$perso2=check_special('docteur');
$_SESSION['flashsene']='6docteur';
$bonus1='life';

 ?>

