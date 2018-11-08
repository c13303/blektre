
<?php

 $action1='place ="hopital"';
$action2='retour="paris/hopital/6hopital"';
include("include/panel.php"); 


?>

<div id="texte">

  <p>- Qu'est ce qui en va pas, monsieur <b><b><?php echo $nom; ?></b></b>? </p>
  

 
    <?php
	$hapen=check_special('docteur');

	$m1='Je demande si je peux avoir un peu de morphine';
	$v1='paris/hopital/6hopital_morphine';
	$m2='J`ai envie de mourir.';
	$v2='paris/hopital/6hopital_suicide';
	$m4='Je l`invite à me goder l`urètre';
	$v4='paris/hopital/6fume_docteur';

	$m5='Je ... Rien. Rien. Pardon.';
	$v5='paris/hopital/6hopital';
	
	
	
	
	
	
	
	
	
	





$perso2=check_special('docteur');
$_SESSION['flashsene']='6docteur';


 ?>

 
