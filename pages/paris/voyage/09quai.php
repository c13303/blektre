
<?php

 $action1='place ="Gare"';
$action2="retour='paris/gare/1gare'";
include("include/panel.php"); 
$endroit="a la gare";


$present=player_present($nom,$place);
$hapen=$present['nom'];

$acteur=check_special('controleur');
$_SESSION['endroit']='';
?>

<div id="texte">

  <p>Le train est � quai et s'appr�te � d�marrer. Vous fumez votre clope au vent, et lachez une caisse qui s'envole avec po&eacute;sie.</p>
  <p>
    <?php
	
	
	
	if ($nom==$acteur)
		{
		echo "<br>Vous �tes le king du RER, avec votre k�pi et votre sifflet. Vous guettez le fraudeur.<br><br>";
		
		$m1="Je monte dans le RER";
		$v1="paris/voyage/09voyage_controleur";
		}
	else
		{
			echo $acteur.' arpente le wagon avec son k�pi et son sifflet. Ce petit chef a la carure de ceux qui ont rat� leur vie, et compensent avec une activit� autoritaire � leur port�e, bien souvent, pitoyable. Malgr� tout, il vaut mieux avoir son billet.<br><br>Le RER s`appr�te � d�marrer.<br><br>';

					$m1="Je monte dans le RER";
					$v1="paris/voyage/09ivrytrain"; 
					
			
		}

 if ($hapen && $hapen != $acteur)
	 {
		 echo $hapen." demande si le RER qui part est bien celui de ivry. Il est vraiment aga�ant.<br>";
		 
		$m4='Je ne peux pas blairer les types comme '.$hapen.'. Je le d�fonce.';
		$v4="sp/fume"; 
	 
	 }




    
 
$m5="Je me tire";
					$v5=$retour; 




    ?>
  </p>
 
<?php 

$fapen=$present;
$perso3=$acteur;
$_SESSION['flashsene']='quai';
 ?>

 
