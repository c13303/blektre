
<?php

 $action1='place ="hopital"';
$action2='retour="paris/hopital/6hopital"';
include("include/panel.php"); 

$_SESSION['flashsene']='6hopital';
?>

<div id="texte">


  

 
    <?php
	$docteur=check_special('docteur');

	$present=player_present($nom,$place);
	$hapen=$present['nom'];
	if($hapen==$docteur)
	{
	$hapen='';
	}
	
	
	if($hapen)
	{
	echo $hapen.' erre comme un con dans le grand batiment blanc, en peignoir';
	$m3='Je défonce '.$hapen;
	$v3='sp/fume';

	}
	
	if($nom!=$docteur)
	{
	echo '   <p>L`hopital de la ville ressemble fort &agrave; la cour des miracles, et cela vous redonne un peu go&ucirc;t en la foi religieuse &agrave; chaque fois que vous y mettez les pieds. Des &eacute;clop&eacute;s se baladent de ci, de l&agrave;, de l`eau de o&ugrave;? de l`eau de la-haut, vous dites vous pour vous m&ecirc;me sans trop savoir pourquoi. </p><p>Le docteur '.$docteur.' vous accueille, les mains dans les poches de sa blouse blanche, avec un sourire de p&eacute;dale digne des plus grands m&eacute;decins.</p>
  <p>- Bonjour, vous d&eacute;sirez ?   </p>
';
	$m1='Je vais mal, docteur';
	$v1='paris/hopital/6hopital_soignage';
	$m2='Je voudrais me faire une injection de Collagène';
	$v2='paris/hopital/6hopital_collagene';
	
	
		if($sida)
	{
	$m4='J`ai le SIDA bordel aidez moi !!!!';
	$v4='paris/hopital/sida';
	}
	
	}
	
	else
	{
	echo '<p>Vous enfilez votre blouse et cherchez des yeux quelques petits culs d`infirmières. Vous en profitez pour ingurgiter quelques une de ces pillules revigorantes.</p>';
	set_stat($nom,'life','100');
	in_log($nom,'Vous vous enfilez des antidépresseurs','life');
	
	$sida=check_point($id,'sida');
	if($sida)
		{

		echo '<p>Soudain, le directeur débarque, téléphone sur l`oreille.<br/>-Oui, vendez tout ... Ho, Bordel, '.$nom.', vous êtes malade comme un chien ! Vous avez chopé une saloperie ! Je suis navré mais vous ne pouvez pas pratiquer dans ces conditions. Je suis obligé de vous congédier le temps que ça aille mieux.</p><p>Sur ce, il saute dans l`ascenceur tandis que restez estomaqué dans le couloir.</p>';
		
		set_special('Blektre','docteur');
		$_SESSION['flashsene']='zonmai_largue';
		$hapen=check_special('directeur');
		$m5="Monde de merde.";
		$v5="paris/_street/streetnord";
		$perso2='';$perso3='';$perso4=''; 
		include('include/exit.php');
	
		}
		else
			{
				$m1='Je check mon bizness de docteur';
		$v1='paris/hopital/6hopital_docteur_bizness';
		}
	

	}
	
	
	
	$sida=check_point($id,'sida');

	
	
	
	
	


$m5="Cet endroit pue la mort. Je me tire.";
$v5="paris/_street/streetnord"; 







    ?>

 
<?php 
$perso2=$docteur;
$perso3=mysqli_fetch_assoc(requete('SELECT * FROM `log` WHERE objet="Vous etes mort."  ORDER BY ID DESC LIMIT 0,1'));
$perso3=$perso3['player_name'];

 ?>

 
