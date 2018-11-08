
<?php

 $action1='place ="Train"';
$action2="retour='paris/voyage/09voyagePARIS'";
include("include/panel.php"); 

$present=player_present($nom,$place);
$hapen=$present['nom'];
$acteur=check_special('controleur');

?>

<div id="texte">


  <p>Vous comatez tranquillement dans votre si&egrave;ge. Le voyage est tr&egrave;s long. </p>
  <p>&nbsp;</p>

    <?php

	echo "Le controleur passe et vérifie votre carte orange";
	$m1="Je dors jusqu'à la fin du voyage";
	$v1="paris/voyage/091_arrivee_paris";


	
	
	
	
if($hapen)
{
	echo $hapen.' téléphone à sa mère en imitant l`accent Russe. C`est très irritant.';
	$m2="Je balance ".$hapen." par la fenêtre";
	$v2="paris/voyage/09pousse";
}






$entree='';
$entree2='';

	$perso2=$acteur;
	$_SESSION['flashsene']='voyage_controle';





    ?>
  </p>
  </p>
 
<?php  ?>

 
