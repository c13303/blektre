<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php
 $action1='best = best+500';
 $action2='money = money-60000';
include("include/panel.php"); 




$concess=check_special('concess');	$perso2=$concess; if($present)$hapen=$present;

in_log($nom,'Vous achetez un 4x4 rouge','500 points');
in_point($id,'4x4');
update_stat($concess,'money','+60000');
in_log($concess,'Vous vendez un 4x4 !',"60000 euros");

?>

<div id="texte">

<p>Vous signez le ch&egrave;que et l'abandonnez avec flegme dans la main du vendeur &eacute;bahi. Il vous adresse un grand sourire hypocrite et vous donne les cl&eacute;s du v&eacute;hicule.</p>

<p>
    <?php

	

if($hapen)
	{
	echo $hapen.' devient pâle de jalousie.';
	$m4='Je défonce '.$hapen;
	$v4="sp/fume";

	}
	
$m5="En voiture Simone";
$v5='ivry/concess/4x4'; 

$_SESSION['flashsene']='concess';


 ?>
</p>
  