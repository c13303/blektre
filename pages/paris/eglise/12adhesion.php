<?php 
 // endroit texte


// chemin de retour

//eventuelle pr�action
// $action3='place =""';

require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];

$rael=check_special('rael');

 ?>
 
<div id="texte">
  <p>- Ah, mon fils, tout n'est pas si facile, d�clame <?php echo $rael; ?> qui sourit toujours avec condescendance. Il va d'abord falloir te delester de tes biens mat�riels. Est ce que tu es pr�t ?</p>
  <p>&nbsp;</p>
  <?php
	

	$m2="Oui";
	$v2="paris/eglise/12adhesion_OK";
	$m3="Non";
	$v3="paris/eglise/12eglise";
	$m4="Ca depend des fois";
	$v4="paris/eglise/12malin";



	$perso2=$coeur;
	$perso3=$rael;

	$_SESSION['flashsene']='12eglise_rael';


    ?>
  

  
</p>
 
<?php  ?>

 
























