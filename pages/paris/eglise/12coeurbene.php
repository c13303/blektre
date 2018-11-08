<?php 
 // endroit texte


// chemin de retour

//eventuelle préaction
 $action1='karma =karma + 500';
 $action2='money = money - 500';
require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];

$coeur=check_special_t('coeur');


$hapen=$coeur['player'];
$issecte=check_point($id,'secte');
update_stat($hapen,'money','+500');

in_log($hapen,'Vous avez fait une bénédiction à '.$nom,'500 balles');
in_log($nom,'Vous avez été béni par '.$hapen,'500 balles');
 ?>
 
<div id="texte">
  <p>Il empoche vos 500 euros et l&egrave;ve deux doigts d'une mani&egrave;re d&eacute;sinvolte:</p>
  <p>- Pierrepauljacques, amen. Voil&agrave; t'es b&eacute;ni. T'as mauvais karma mon fr&egrave;re ? T'en veux encore ? </p>
  <?php
  if($money>500){
	$m1="Benis moi encore";
$v1="paris/eglise/12coeurbene";
}
$m4="Je le fume";
$v4="paris/eglise/12_fumecoeur";
$m5="C'est bon, merci";
$v5=$retour; 


	$perso2=$hapen;
	$perso3=$rael;

	$_SESSION['flashsene']='12eglise_coeur';


    ?>
  

  
</p>
 
<?php  ?>

 
























