
<?php

 $action1='place ="Black bar"';
require("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$hapen=$_SESSION['hapen'];

$hapensex=check_stat($hapen);
$hapensex=$hapensex['sex'];

$drogue=check_rank('dealer');
$drogue=$drogue['title'];


?>

<div id="texte">

  <p><b><?php echo $hapen; ?></b> vous écoute attentivement.</p>
<br>
    <?php
	
	if ($frakass>5)
	{
	echo "Vous êtes un peu ponpon, et voilà que vous parlez sans pouvoir vous arrêter.<br>
	A la fin, vous ne contrôlez plus vos gestes, manquez de vous vautrer par terre, et ".$hapen." semble amusé. Vous l'invitez à prendre une trace dans les chiottes en lui montrant votre paquet de ".$drogue." .";
	$m1="Je l'emballe";
$v1="paris/blackbar/bar_drague3";
	$m2="Je lui paye un verre";
$v2="paris/blackbar/bar_drague_foireuse";
	
	}

else
{
	echo $hapen." semble complètement barbée par votre discussion. Voilà qu'elle se met à bailler.<br>- Tu me payes un verre ? ";
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

 
