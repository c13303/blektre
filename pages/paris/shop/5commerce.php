
<?php

 $action1='place ="centre commercial"';
$action2='retour="paris/shop/5commerce"';
include("include/panel.php"); 


?>

<div id="texte">

  <p>Le centre commercial est un peu the-place-to-be pour &ecirc;tre dans le vent, depenser tout son argent en habits et accessoires de mode et ainsi obtenir ce qu'on appelle vulgairement la classe.   


  </p>
  
  
  
    <?php
	$voyante=check_special('voyante');
	$vendeuse=check_special('vendeuse');
	$present=player_present($nom,$place);
	$hapen=$present['nom'];
	
	
	if($vendeuse!=$nom)
	{
	echo $vendeuse.' se tremousse devant son magasin de fringues et gadjets ultra-tendance.<br>';
	$m1='Je vais voir le magasin d`accessoires';
$v1='paris/shop/5accessoire';
	}
	else
	{
	echo 'Vous travaillez dans la boutique de fringues et gadgets.';
	$m1='Je check ma boutique';
$v1='paris/shop/5vendeuse_bethe';
	}
	
	
	
	
	
	
	
	
	
	if($voyante!=$nom)
				{
				echo '<br>'.$voyante.' sied derrière son stand PACO RABANNE SARL, et lit l`avenir à qui voudra l`entendre. C`est assez utile quand on se trouve un peu perdu dans la vie, un peu comme vous.<br>';
				$m2='Je vais voir la voyante';
				$v2='paris/shop/5voyante';
				}
	else
				{
				echo '<br>Vous travaillez ici comme voyante, sous la direction de PACO RABANNE SARL<br>';
				$m2='Je vais voir mon directeur pour discuter de ma condition de travail';
				$v2='paris/shop/5voyante_directeur';
				}
	
	if($hapen)
	{echo $hapen.' flâne dans la galerie et c`est typiquement le genre de bourgeois que vous ne pouvez pas blairer.';
	$m4="Je fume ".$hapen;
$v4="sp/fume"; 
	
	}
	
	

   $entree='';
$entree2='';




$m5="Cet endroit fouette le capitalisme. Je me tire";
$v5="paris/_street/streetnord"; 


$_SESSION['flashsene']='5commerce';




    ?>
   
<?php 


$perso2=$vendeuse;
$perso3=$voyante;


 ?>

 
