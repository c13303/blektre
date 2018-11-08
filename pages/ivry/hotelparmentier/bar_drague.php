
<?php

 
require("include/panel.php"); 


$hapen=$_SESSION['hapen'];
$_SESSION['hapen'] = $hapen;
$hapensex=check_stat($hapen);
$hapensex=$hapensex['sex'];

?>

<div id="texte">

  <p>Vous vous approchez de <b><?php echo $hapen; ?></b> en souriant</p>
  <p>- Vous &ecirc;tes seul(e) ?</p>

    <?php
	
	if ($hapensex>0)
	{
	$bio=check_bio($hapen);
	echo $hapen." sourit timidement, et vous invite à vous asseoir. Voila qu'il se met à vous raconter sa vie.
	<p>-".$bio.", dit il avec une certaine fierté.</p>";
	$m1="Je fais le beau gosse et tchatche le gibier";
$v1="ivry/hotelparmentier/bar_drague2";
	$m2="Je lui paye un verre";
$v2="ivry/hotelparmentier/bar_drague_foireuse";
	
	}

else
{
	echo $hapen." n'a pas l'air enchanté.";
	$m1="Je lui paye un verre";
$v1="ivry/hotelparmentier/bar_drague_foireuse";
	
	}

   

$m3="Je me tire";
$v3=$_SESSION['rue']; 





    ?>
  </p>
 
<?php  ?>

 
