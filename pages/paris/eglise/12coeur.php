<?php 
 // endroit texte


// chemin de retour

//eventuelle préaction
// $action3='place =""';

require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];

$coeur=check_special_t('coeur');
$hapen=$coeur['player'];
$issecte=check_point($id,'secte');
 ?>
 
<div id="texte">
  <p>L'enfant de coeur, <?php echo $hapen; ?> vous méprise ouvertement.</p>
  <p>- Mec, &ccedil;a te dirait pas une petite b&eacute;n&eacute;diction ? Pas ch&egrave;re quoi, t'vois, genre, 500 balles, dit-il en tendant la main. </p>
  <p>Il ricane. </p>
  <?php
  if($money>500){
	$m1="Benissez moi mon doux seigneur";
$v1="paris/eglise/12coeurbene";
}
$m4="Je le fume";
$v4="paris/eglise/12_fumecoeur";
$m5="Je m'eloigne";
$v5=$retour; 


	$perso2=$hapen;
	$perso3=$rael;

	$_SESSION['flashsene']='12eglise_coeur';


    ?>
  

  
</p>
 
<?php  ?>

 
























