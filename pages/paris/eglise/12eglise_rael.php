<?php 
 // endroit texte


// chemin de retour

//eventuelle préaction
// $action3='place =""';

require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];

$rael=check_special('rael');
$issecte=check_point($id,'secte');
 ?>
 
<div id="texte">
  <p>Le Raël <?php echo $rael; ?> vous accueille avec un grand sourire.</p>
  <p>- Bonjour, fils. Que la grande thérière géante soit avec toi. Veux-tu que je te lave de tout péché, mon agneau ? Tu en sortiras pur et maculé.</p>
  <p>&nbsp;</p>
  <?php
	
	if($issecte)
	{
	echo "<p>En tant que fidèle de la secte, le Rael vous permet de lui baiser la main, ce que vous faites avec humilité</p>";
			$m2="Bénis moi mon doux seigneur";
	$v2="paris/eglise/12beni";
	}
	else
	{
		$m2="Oui, je voudrais adhérer à la secte";
	$v2="paris/eglise/12adhesion";
	}

	if($isjunky)
	{
	$m1="Je voudrais me desintoxiquer de la drogue !!";
	$v1="paris/eglise/12desintox";
	}
	

	$m3="Je voudrais ressuciter un ami";
	$v3="paris/eglise/12ressuciter";
	$m4="Je fume cet enfoiré de gourou";
	$v4="paris/eglise/12fume_gourou";
	$m5="Je me tire de cette putain de secte";
	$v5="paris/_street/streetouest";


	$perso2=$coeur;
	$perso3=$rael;
	$_SESSION['flashsene']='12eglise_rael';


    ?>
  

  
</p>
 


 
























