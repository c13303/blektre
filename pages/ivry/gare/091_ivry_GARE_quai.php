
<?php

 $action1='place ="gare de ivry"';
$action2='retour ="ivry/gare/091_ivry_GARE"';
include("include/panel.php"); 
$endroit="a la gare";




$acteur=check_special('controleur');
$_SESSION['endroit']='';
?>

<div id="texte">

  <p>Le RER est � quai et s'appr�te � d�marrer. Vous fumez votre clope au vent, et lachez une caisse qui s'envole avec po&eacute;sie, puis vous montez. </p>
  <p>
    <?php
	
	
	
	if ($nom==$acteur)
		{
		echo "<br>Vous �tes le king du RER, avec votre k�pi et votre sifflet. Vous guettez le fraudeur.<br><br>";
		
		$m1="Je monte dans le train";
		$v1="paris/voyage/09voyage_controleur";
		}
	else
		{
			echo $acteur.' arpente le wagon avec son k�pi et son sifflet. Ce petit chef a la carure de ceux qui ont rat� leur vie, et compensent avec une activit� autoritaire � leur port�e, bien souvent, pitoyable. Malgr� tout, il vaut mieux avoir sa carte orange.<br><br>Le train s`appr�te � d�marrer.<br><br>';

					$m1="Je m'assois.";
					$v1="paris/voyage/09voyagePARIS"; 
					$m2="Je descend du train.";
					$v2=$retour; 
			
		}

 if ($present)
	 {
		 echo $present." demande si le train qui part est bien celui de Pont � Mousson. Il est vraiment aga�ant.<br>";
		 $hapen=$present;
		
		$m4='Je ne peux pas blairer les types comme '.$hapen.'. Je le d�fonce.';
		$v4="sp/fume"; 
	 
	 }




    
 





    ?>
  </p>
 
<?php 
$hapen=$clodo;
$perso2=$present;
 ?>

 
