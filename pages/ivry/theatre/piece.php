<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php


include("include/panel.php"); 


?>
<div id="texte">

<p>Vous vous installez. La sc&egrave;ne est rudimentaire, vous &ecirc;tes curieux et excit&eacute; de d&eacute;couvrir cette oeuvre d&eacute;crite comme majeure dans le Parisien.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p>
    <?php
$present=player_present($nom,$place);
	$hapen=$present['nom'];
	
	if($hapen)
	{
	echo $hapen.' s`installe à côté de vous, à croire qu`il fait exprès. Son odeur est tout bonnement insupportable.';

	}
	
	
	
	
	
	
	
	

$m5="Super.";
$v5='ivry/theatre/acte1'; 

$_SESSION['flashsene']='theatrelight';


 ?>
</p>
  