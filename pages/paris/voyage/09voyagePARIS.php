
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

	echo "Le controleur passe et v�rifie votre carte orange";
	$m1="Je dors jusqu'� la fin du voyage";
	$v1="paris/voyage/091_arrivee_paris";


	
	
	
	
if($hapen)
{
	echo $hapen.' t�l�phone � sa m�re en imitant l`accent Russe. C`est tr�s irritant.';
	$m2="Je balance ".$hapen." par la fen�tre";
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

 
