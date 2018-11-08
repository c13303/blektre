
<?php

 $action1='place ="Black bar"';
require("include/panel.php"); 


$hapen=$_SESSION['hapen'];

$hapensex=check_stat($hapen);
$hapensex=$hapensex['sex'];

?>

<div id="texte">

  <p>Vous faites votre blague à <b><?php echo $hapen; ?></b>.</p>

    <?php
	
	if ($hapensex>0)
	{
	echo $hapen." fait semblant de fouiller dans son sac et se remet à sourire bêtement.";
	$m1="Je fais gonfler mes trous de nez";
$v1="paris/blackbar/bar_drague2";
	$m2="Je lui paye un verre";
$v2="paris/blackbar/bar_drague_foireuse";
	
	}

else
{
	echo $hapen." n'a pas l'air enchanté.";
	$m1="Je lui paye un verre";
$v1="paris/blackbar/bar_drague_foireuse";
	
	}

   

$m3="Je me tire";
$v3=$_SESSION['rue']; 





    ?>
  </p>
 
<?php
$_SESSION['flashsene']="bar_drague";
  ?>

 
