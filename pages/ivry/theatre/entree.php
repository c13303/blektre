<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php

 $action1='place ="Theatre"';		$_SESSION['endroit']="au Théâtre";
$action2='retour ="ivry/periph/1periph"';
include("include/panel.php"); 

$_SESSION['rue']='ivry/periph/1periph';
?>
<div id="texte">

<p>Vous entrez dans le th&eacute;&acirc;tre. Apparemment, on y joue l'adaptation th&eacute;&acirc;trale de l'oeuvre d'un jeune loser dont le travail a &eacute;t&eacute; pill&eacute; par des professionnels du m&eacute;tier. Vous pensez &agrave; la pi&egrave;ce que vous &eacute;crivez le soir en vous masturbant,  en r&ecirc;vant du jour o&ugrave; elle sera jou&eacute;e en ce lieu mystique.</p>
<p>- C'est 10 euros, monsieur. </p>
<p>&nbsp;</p>

<p>
    <?php
$present=player_present($nom,$place);
	$hapen=$present['nom'];
	
	if($hapen)
	{
	echo $hapen.' vous ignore d`un air tellement snob qu`une folle rage s`empare de vous.';
	$m4='Je défonce '.$hapen;
	$v4="sp/fume";

	}
	
	
	
	
	
	
	
	
	
	if($money>10){
$m1="Je paye pour voir la pièce";
$v1="ivry/theatre/piece"; 
}
else
echo '<p>Vous n`avez pas de quoi vous payer un billet.</p>';

$m5="Je me taille";
$v5=$_SESSION['rue']; 

$_SESSION['flashsene']='guichet';


 ?>
</p>
  