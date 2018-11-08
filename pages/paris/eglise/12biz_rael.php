<?php 
 // endroit texte
// $action1='place =""';

// chemin de retour
// $action2='retour="paris/"';

//eventuelle préaction
// $action3='place =""';

require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];


 
 ?>
 
<div id="texte">

<p>Ce job est un peu contraignant, sur que la chastet&eacute; n'a jamais vraiment &eacute;t&eacute; votre truc, seulement, ce job est vraiment le plus lucratif que vous ayez jamais eu. Vous regardez avec envie l'enfant de coeur qui s'affaire.</p>
  <?php 
	
	if($present)
		{
		$hapen=$present;
		echo '<p>'.$hapen.' prie comme un imbécile, à genoux comme une petite merde.';
		
		$m4='Je fume '.$hapen;
		$v4='sp/fume';
		}

	
	
	$m5="Je sors";
	$v5=$_SESSION['rue'];


	$perso3=$nom;
$_SESSION['flashsene']='12eglise_rael';

    ?>
  

  
</p>
 
<?php  ?>

 
