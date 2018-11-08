<?php 
 // endroit texte


// chemin de retour

//eventuelle préaction

require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];

$rael=check_special('rael');

 ?>
 
<div id="texte">
  <p><?php echo $rael; ?> revient et une odeur de Brise WC l'accompagne.</p>
  <p>- Hmmmpf. Bon, maintenant il faut que tu aille déterrer ton pote <?php echo $_SESSION['defunt']; ?> au cimetière avant la tombée de la nuit. Heu, s'il a une tete bizarre, c'est que son cadavre était trop vieux et qu'il est devenu zombie. C'est un peu crade un zombie, mais c'est sympa. </p>
  <p>
  <?php
  
	$_SESSION['zombie_ok']=strtolower($_SESSION['defunt']);
	$_SESSION['zombie_ok']=ucfirst($_SESSION['zombie_ok']);
	unset($_SESSION['defunt']);


	
	

	$m5="Je me tire de cette putain de secte";
	$v5="paris/_street/streetouest";

$perso2=$coeur;
	$perso3=$rael;

	$_SESSION['flashsene']='12eglise_rael';
	


    ?>
  </p>

 
<?php  ?>

 
























