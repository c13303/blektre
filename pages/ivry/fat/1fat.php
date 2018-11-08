<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php

 $action1='place ="Fat Burger"';
$action2='retour ="ivry/09A_ivrycenter"';
include("include/panel.php"); 
$fat=check_special('fat');	$perso2=$fat;
$_SESSION['rue']='ivry/09A_ivrycenter';
?>

<div id="texte">

<p>Le Fat Burger est l'&eacute;tablissement le plus chanm&eacute; de toute l'&icirc;le de France, pensez vous. C'est exactement la nourriture que vous pr&eacute;f&eacute;rez et vous avez faim rien qu'en y pensant. D'ailleurs, avant d'avoir command&eacute;, l'excitation reveille une petite envie de gerber dans votre estomac.</p>
<?php


	$present=player_present($nom,$place);
	$hapen=$present['nom'];
	
	
	if($hapen && $hapen!=$fat)
	{
	echo $hapen.' mange salement ses frites. Cela pourrait presque vous couper l`apétit.';
	$m4='Je défonce '.$hapen;
	$v4="sp/fume";

	}
	
	
	
	
	


$m1="Je commande un ICanHas Cheezburger";
$v1="ivry/fat/burger"; 

$m5="Je criss mon camp";
$v5=$_SESSION['rue']; 

$_SESSION['flashsene']='fatburger';


 ?>

 
