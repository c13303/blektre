<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php


include("include/panel.php"); 


?>
<div id="texte">

- O rage, O desespoir, O oursine ennemie !
<p>Un type avec des oreilles d'ours commence &agrave; s'agiter sur la sc&egrave;ne, mais vous ne comprenez pas vraiment ce qu'il raconte. Il fait des commentaires sur sa propre fa&ccedil;on de jouer, et se met nu en beuglant. Vous avez trop chaud.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p>
    <?php
$present=player_present($nom,$place);
	$hapen=$present['nom'];
	
	if($hapen)
	{
	echo $hapen.' rit à gorge déployée.';

	}
	
	
	
	
	
	
	
	

$m5="Hmm.";
$v5='ivry/theatre/acte2'; 

$_SESSION['flashsene']='acte1';


 ?>
</p>
  