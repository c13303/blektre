
<?php

 $action1='place ="Train"';
$action2="retour='paris/voyage/09voyage'";
include("include/panel.php"); 

$present=player_present($nom,$place);
$hapen=$present['nom'];
$acteur=check_special('controleur');

?>

<div id="texte">


  <p>Vous comatez tranquillement dans votre si&egrave;ge. Le voyage est tr&egrave;s long. </p>
  <p>&nbsp;</p>

    <?php
	$billet=check_point($id,'billet');
	if(!$billet)
	{
	echo "Le controleur ".$acteur." passe et vous demande votre carte orange. Vous feignez l`avoir perdue.
	<p>-Je vais devoir vous mettre une amende. Et vous renvoyer � Paris.</p>
	";
	$m1="Je paye l'amende.";
	$v1="paris/voyage/09amende";
	$m2="Je d�fonce le controleur";
	$v2="paris/voyage/09fume_controleur";
	}
	else
	{
	echo "Le controleur passe et verifie votre carte orange";
	$m1="Je dors jusqu'� la fin du voyage";
	$v1="ivry/gare/091_arrivee_ivry";

	}
		$perso2=$acteur;
	
	
	
	
if($hapen)
{
	echo $hapen.' t�l�phone � sa m�re en imitant l`accent du sud. C`est tr�s irritant.';
	$m2="Je d�fonce ".$hapen." qui me provoque";
	$v2="sp/fume";
}






$entree='';
$entree2='';

$perso2=$acteur;
$_SESSION['flashsene']='voyage_controle';




    ?>
  </p>
  </p>
 
<?php  ?>

 
