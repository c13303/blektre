
<?php

 $action1='place ="hopital"';
$action2='retour="paris/hopital/6hopital"';
include("include/panel.php"); 


?>

<div id="texte">

  <p>Vous faites votre ronde matinale mais l'odeur des patients vous donne rapidement envie de vomir. </p>
  

 
    <?php
	$docteur=check_special('docteur');

	$present=player_present($nom,$place);
	$hapen=$present['nom'];
	
	
	if($hapen)
	{
	echo $hapen.' est là, semble mal en point';
	$m3='Je le défonce';
	$v3='sp/fume';

	}
	
		


$m5="Cet endroit pue la mort. Je me tire.";
$v5="paris/_street/streetnord"; 







    ?>

 
<?php 
$perso2=$nom;
$_SESSION['flashsene']='6docteur';


 ?>

 
