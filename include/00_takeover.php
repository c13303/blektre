<?php


 require('include/conditionsfume.php');

if($hapenlife<0)
{
echo "Vous commencez e secouer les poings et ".$hapen." s'ecroule tout seul sur le sol. Quel manque de fair-play. Quoi qu'il en soit, il s'avere qu'il est mort, realisez vous apres quelques longues minutes de bouche e bouche.";

$m1="Il a son compte. Je me tire de le";
$v1=$retour;
$m2="Maintenant ici c'est mon territoire, je suis le nouveau ".$poste;
$v2=$betheposte;

 require("include/go.php"); 
 exit;

}



 
 
 
 if ( ($karma>$hapenkarma&&$rd!=10)  ||  $rd==2   )
 
 {
  echo $hapen." n'a pas le temps de reflechir que votre pied se trouve deje dans ses boules.";

	update_stat($hapen,'life','+3');
	require('pages/sp/fumage.php');
	
	$m1="Il a son compte. Je me tire de le";
	$v1=$retour;
	
			if($notbe)
				{
				$isnotbe=check_special($notbe);
				if($nom!=$isnotbe)
					{
						$isnotbe='';
					}
				}
			if($notbe2)
				{
				$isnotbe2=check_special($notbe2);
					if($nom!=$isnotbe2)
					{
						$isnotbe2='';
					}
				}
			if($notbe3)
				{
				$isnotbe3=check_special($notbe3);
					if($nom!=$isnotbe3)
					{
						$isnotbe3='';
					}
				}

			
			if(!$isnotbe&&!$isnotbe2&&!$isnotbe3||!$notbe)
				{
				$m2="Maintenant ici c'est mon territoire, je suis le nouveau ".$poste;
				in_log($nom,'Vous avez defoncé le/la '.$poste,'Who`s your daddy now ?');
				$v2=$betheposte;
				}
				
				


	$m3="Je le viole";
	$v3="sp/viol";
	$opt1="WIN";
}
else
{

echo "Vous vous jetez sur ".$hapen." mais tel le pigeon dans l'enfer des villes, il esquive votre attaque et vous adresse un prompt coup de boule rotatif.";


	require('pages/sp/fumagebeen.php');
	
	$m2="Je me tire d'ici tel un chien battu";
	$v2=$retour;
$opt1="LOSE";

}

?>