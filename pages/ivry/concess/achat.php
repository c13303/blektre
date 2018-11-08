<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php


include("include/panel.php"); 




$concess=check_special('concess');	$perso2=$concess; if($present)$hapen=$present;



?>

<div id="texte">

<p>- Pauvre petit &ecirc;tre issu du prol&eacute;tariat ... Vous imaginez seulement combien peut co&ucirc;ter un tel bijou ? Allez, dites un chiffre, pour rire ... Et bien, c'est au d&eacute;l&agrave;: 60000 euros mon bon ami ! Et oui, mais voyez vous, c'est un v&eacute;hicule &eacute;litiste. Ainsi est faite la vie ... dit-il en soupirant. </p>
<p>
    <?php

	if($money >= 60000)
	{

	$m4="Je sors mon chéquier";
	$v4="ivry/concess/achatOK";
	
	}
	else '<p>Vous avez envie de prendre votre Lada et d`aller la planter la gueule de cet impertinent.</p>';

if($hapen)
	{
	echo $hapen.' rit un peu, bien que cela sonne un peu jaune.';
	$m4='Je défonce '.$hapen;
	$v4="sp/fume";

	}
	
$m5="Je vais me faire voir ailleurs";
$v5=$_SESSION['rue']; 

$_SESSION['flashsene']='concess';


 ?>
</p>
  