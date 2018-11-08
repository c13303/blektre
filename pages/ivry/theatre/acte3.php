<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php


include("include/panel.php"); 


?>
<div id="texte">

Les acteurs se d&eacute;placent dans toute la pi&egrave;ce qui commence &agrave; sentir la sueur. Ils d&eacute;ploient toujours beaucoup d'energie dans leur jeu et vous avez une profonde envie de vous tirer une balle. Seulement, vous en prenez de la graine: &ccedil;a, c'est du th&eacute;&acirc;tre. Vous devriez vous en inspirer pour l'&eacute;criture de votre pi&egrave;ce.
<?php
in_point($id,'idee');
in_log($nom,'Vous allez au théatre','inspiration');

?>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p>
    <?php
$present=player_present($nom,$place);
	$hapen=$present['nom'];
	
	if($hapen)
	{
	echo $hapen.' prends beaucoup de notes.';

	}
	
	
	
	
	
	
	
	

$m5="Han.";
$v5='ivry/theatre/fin'; 

$_SESSION['flashsene']='acte3';


 ?>
</p>
  