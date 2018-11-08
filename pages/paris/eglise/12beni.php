<?php 
 // endroit texte


// chemin de retour

//eventuelle préaction
// $action3='place =""';

require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];

$rael=check_special('rael');
$hapen=$rael;
 ?>
 
<div id="texte">
  <p>- Je te lave de tout tes p&eacute;ch&eacute;s. Donne moi ton argent en offrande &agrave; la th&eacute;i&egrave;re, qui va te purifier. </p>
  <p>Voila qu'il pisse dans le b&eacute;nitier, et vous demander de vous laver le visage dedans. Vous en ressortez perturb&eacute;, mais plus l&eacute;ger. </p>
  <p>&nbsp;</p>
  <?php
	 	set_stat($nom,'money','0');
	in_log($nom,'Vous vous faites bénir par '.$hapen,'karma positif');
	in_log($hapen, $nom. ' vous donne tout son argent','gourou');
	in_point($id,'beni');
	update_stat($hapen,'money','+'.$money);
	set_stat($nom,'karma','100');


	$m3="Foutre.";
	$v3="paris/eglise/12eglise";




	$perso2=$coeur;
	$perso3=$rael;

	$_SESSION['flashsene']='12eglise_rael';


    ?>
  

  
</p>
 
<?php  ?>

 
























