
<?php

 $action1='place ="hopital"';
$action2='retour="paris/hopital/6hopital"';
include("include/panel.php"); 


?>

<div id="texte">

  <p>Le docteur vous osculte. </p>
  

 
    <?php
	$docteur=check_special('docteur');


	$hapen=$docteur;
	update_stat($docteur,'karma','+50');
	in_log($hapen,'Vous soignez '.$nom,'docteur');
	in_log($nom, 'Le docteur '.$hapen.' vous soigne','mauviette');
	
	if($life>50)
	{
	echo ' <p>- Vous avez juste une petite grippe. Inutile de faire la tapette. Foutez moi le camp.</p>
';
	$m1='Je vais vraiment mal docteur, c`est dans ma tete';
	$v1='paris/hopital/6hopital_psy';
	$m2='Je le défonce';
	$v2='paris/hopital/6fume_docteur';
	}
	else
	{
	echo '<p>- Je vais vous faire une piqure de morphine. Ca devrait aller mieux après.</p>
	<p>Le docteur vous perfore le cul avec une grosse aiguille. Vous vous sentez mieux.</p>
	';
	set_stat($nom,'life',100);
	$m1='Merci docteur';
	$v1='paris/_street/streetnord';
	}
	
	
	
	
	
	
	
	
	


$m5="Cet endroit pue la mort. Je me tire.";
$v5="paris/_street/streetnord"; 







    ?>

 
<?php 
$perso2=check_special('docteur');
$_SESSION['flashsene']='6docteur';
$bonus1='life';

 ?>

 
