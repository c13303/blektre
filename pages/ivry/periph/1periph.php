<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php

 $action1='place ="Ivry periph"';$_SESSION['endroit']="au sud d'Ivry";
$action2='retour ="ivry/periph/1periph"';
include("include/panel.php"); 

$_SESSION['rue']='ivry/periph/1periph';
?>

<div id="texte">

<p>Vous &ecirc;tes au bord du p&eacute;riph', &agrave; Ivry. Cette endroit fait bon vivre: peut-&ecirc;tre pourriez vous y acheter un pavillon, plus tard, pour vous et Josiane. </p>
<p>Un 4x4 miroite dans la vitrine du concessionnaire, tandis qu'une douce odeur de kebab s'&eacute;chappe doucement du th&eacute;&acirc;tre contemporain.</p>
<p>
    <?php
$present=player_present($nom,$place);
	$hapen=$present['nom'];
	
	if($hapen)
	{
	echo $hapen.' se pavane avec arogance, enchainant clope sur clope, afin de vous pomper l`air.';
	$m3='Je défonce '.$hapen;
	$v3="sp/fume";

	}
	
	
	
	
	
	
	
	
	
	
$m1="Je vais au théâtre contemporain";
$v1="ivry/theatre/entree"; 
$m2="Je vais chez le concessionnaire";
$v2="ivry/concess/entree"; 
$m5="Je vais de l'autre côté du périph'";
$v5="ivry/periph/side"; 
$m4="Je retourne au centre d'Ivry";
$v4="ivry/09A_ivrycenter"; 

$_SESSION['flashsene']='ivrysud';


 ?>
</p>
  