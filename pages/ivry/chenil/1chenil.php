<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php

 $action1='place ="Chenil"';$_SESSION['endroit']="au chenil";

include("include/panel.php"); 





if($present)$hapen=$present;
$chien=check_special('chien');
$labrador=check_point($id,'labrador');$perso2=$chien;
?>

<div id="texte">

<p><?php

if($chien!=$nom ) 
{echo "Le chenil est en fait une vieille d&eacute;charge peupl&eacute;e de chiens errants. L'un d'entre eux vous parait relativement &eacute;trange, &eacute;tant donn&eacute; qu'il parle, et vous adresse un &quot;Casse-toi de l&agrave;, enfoir&eacute; de sale fils de pute d'humain de merde&quot; peu am&egrave;ne.";
	
	if(!$labrador){
	
	$m1="Je d�fonce ce cl�bard impoli";
	$v1="ivry/chenil/fumechien";
	
	}
	else
	echo '<p>Vous avez un contrat avec les chiens, pour s�duire la douce et belle Josiane qui a toujours r�v� d`un labrador.</p>';
	
	$lab=check_point($id,'looklabrador');

if($lab)
{

	$m2="Je lui dit que je cherche un labrador";
	$v2="ivry/chenil/labrador";
	
	}

}
else
{
echo "Vous aimez jouer avec les chiens dans la d�charge. D'ailleurs, vous �tes vous m�me un v�ritable chien.";
	$m1="Je joue avec mes potes chiens";
	$v1="ivry/chenil/betheclebs";
	
}


?></p>





<p>&nbsp; </p>
<p>
    <?php
	
	if($hapen)
	{
	echo $hapen." essaye un cl�bard mais ne fait pas grand chose sinon se faire bouffer le cul .";
	$m3='Je d�fonce '.$hapen;
	$v3="sp/fume";

	}
	
	
	
	
	
	
	
	
	
	


$m5="J'ai du me gourer d'adresse. Je me tire";
$v5=$_SESSION['rue']; 

$_SESSION['flashsene']='chenil';


 ?>
</p>
  