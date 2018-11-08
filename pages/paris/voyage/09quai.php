
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

  <p>Le train est à quai et s'apprête à démarrer. Vous fumez votre clope au vent, et lachez une caisse qui s'envole avec po&eacute;sie.</p>
  <p>
    <?php
	
	
	
	if ($nom==$acteur)
		{
		echo "<br>Vous êtes le king du RER, avec votre képi et votre sifflet. Vous guettez le fraudeur.<br><br>";
		
		$m1="Je monte dans le RER";
		$v1="paris/voyage/09voyage_controleur";
		}
	else
		{
			echo $acteur.' arpente le wagon avec son képi et son sifflet. Ce petit chef a la carure de ceux qui ont raté leur vie, et compensent avec une activité autoritaire à leur portée, bien souvent, pitoyable. Malgré tout, il vaut mieux avoir son billet.<br><br>Le RER s`apprête à démarrer.<br><br>';

					$m1="Je monte dans le RER";
					$v1="paris/voyage/09ivrytrain"; 
					
			
		}

 if ($hapen && $hapen != $acteur)
	 {
		 echo $hapen." demande si le RER qui part est bien celui de ivry. Il est vraiment agaçant.<br>";
		 
		$m4='Je ne peux pas blairer les types comme '.$hapen.'. Je le défonce.';
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

 
