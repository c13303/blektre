<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php


include("include/panel.php"); 





if($present)$hapen=$present;
$chien=check_special('chien');
$perso2=$chien;
?>

<div id="texte">

<p>Le type se met &agrave; aboyer comme un gros con. </p>
<p>- Je suis un labrador top-qualit&eacute;. Et j'ai un prix convenable : 2000 &euro; pour impressionner ta grosse vache. </p>
<p>Vous le d&eacute;visagez d'un air perplexe. Vous ne pensiez pas que les labradors sentaient l'alcool aussi fort, et vous vous dites que c'est sans doute ce qui plait &agrave; Josiane, cette petite salope quasi-zoophile.
  <?php

if($money >=2000)
{
	$m2="Vendu.";
	$v2="ivry/chenil/labradorOK";
}	
	else
	{
	echo "<p>Vous n'avez pas lse moyens de vous payer les services d'un tel énergumène.</p>";
	}

	
	if($hapen)
	{
	echo $hapen." commence à tripoter l'anus d'un des animaux.";
	$m3='Je défonce '.$hapen;
	$v3="sp/fume";

	}
	
	
	
	
	
	
	
	
	
	


$m5="J'ai du me gourer d'adresse. Je me tire";
$v5=$_SESSION['rue']; 

$_SESSION['flashsene']='chenil';


 ?>
</p>
  