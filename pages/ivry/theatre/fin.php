<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php


include("include/panel.php"); 


?>
<div id="texte">

Jamais votre depression n'a &eacute;t&eacute; aussi sensible qu'apr&egrave;s ce spectacle, ce que vous trouvez plut&ocirc;t b&eacute;n&eacute;fique. L'envie d'&eacute;crire votre pi&egrave;ce vous submerge.

<p>&nbsp;</p>
<p>&nbsp;</p>

<p>
    <?php
$present=player_present($nom,$place);
	$hapen=$present['nom'];
	
	if($hapen)
	{
	echo $hapen.' explique son interpretation de la piece en parlant fort.';

	}
	
	
	
	
	
	
	
	
$perso2=$nom;
$m5="Pfiou.";
$v5=$_SESSION['rue']; 

$_SESSION['flashsene']='theatrefin';


 ?>
</p>
  