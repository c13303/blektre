<?php  require("include/panel.php");
 

$hapen=$_SESSION['hapen'];
 if(!$hapen)erreur('no hapen fume');
 ?>
 
 <div id="texte">
 
 
 <?php 
 

 require('include/conditionsfume.php');
 
 
 
 if ( ($karma>$hapenkarma&&$rd!=10)  ||  $rd==2   )
 
 {
  echo $hapen." se jette sur vous mais tel le pigeon dans l'enfer des villes, vous esquivez son attaque et lui adressez un prompt coup de boule rotatif.";

$opt1="WIN";

	require('pages/sp/fumage.php');
	
	$m1="Je lui crache dessus et je me tire";
	$v1=$retour;
	$m3="Je le viole";
	$v3="sp/viol";
}
else
{

echo "Vous vous jetez sur ".$hapen." mais tel le pigeon dans l'enfer des villes, il esquive votre attaque et vous adresse un prompt coup de boule rotatif.";

	require('pages/sp/fumagebeen.php');
	
	$m2="Je me tire d'ici tel un chien battu";
	$v2=$retour;

$opt1="LOSE";
}

$_SESSION['flashsene']="fume";





$entree='';
$entree2='';

    ?>




 
























