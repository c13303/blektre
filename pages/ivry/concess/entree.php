<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php

 $action1='place ="Concessionnaire de 4x4"'; $_SESSION['endroit']="chez le concessionnaire";
$action2='retour ="ivry/periph/1periph"';
include("include/panel.php"); 

$_SESSION['rue']='ivry/periph/1periph';
$tube=check_title('tube');



$concess=check_special('concess');	$perso2=$concess;



?>

<div id="texte">

<p>Un 4x4 flamboyant tr&ocirc;ne dans le showroom - typiquement le genre de machine fait pour &ecirc;tre conduit par vous, qui vous imaginez descendant les boulevards, tranquille, repr&eacute;sentant dans votre 4x4 &eacute;carlate, imposant le respect de tous et toutes, pi&eacute;tons et v&eacute;hicules, et jeunes filles en fleurs pr&ecirc;te &agrave; tout pour y faire un tour sur les si&egrave;ges en cuir, avec de la coke et du champagne, tandis que vous vous feriez sucer tout en conduisant sur un fond de <?php echo $tube; ?> &agrave; putain de fond dans l'autoradio. </p>
<p>
    <?php
	
	
$present=player_present($nom,$place);
	$hapen=$present['nom'];
	
	if($hapen)
	{
	echo $hapen.' regarde la carosserie d`un air faussement connaisseur, et essuie une petite tâche. Il ne faudrait tout de même pas qu`il raye la voiture.';
	$m4='Je défonce '.$hapen;
	$v4="sp/fume";

	}
	
	$x4=check_point($id,'4x4');
	
	if($x4)
	{	
	 echo '<p>Ce 4x4 vous appartient.';
	 
	 $m4="Je monte au volant";
	$v4='ivry/concess/4x4'; 
	
	$m5="Magnifique. Je m`en vais.";
$v5=$_SESSION['rue']; 
	}
	
	
	
	if($nom!=$concess&&!$x4) {
		echo $concess.' s`approche de vous et vous avoue qu`il faut fichtrement bien gagner sa vie pour se payer un tel bolide, tout en vous regardant des pieds à la tête d`un air méprisant.';
		$m1="J`achète ce 4x4 rutilant dont jài toujours rêvé.";
	$v1="ivry/concess/achat";
	
	
		$plan4x4=check_point($id,'piston4x4');
		if($plan4x4)
		{
		$m2="Je viens pour le poste de concessionnaire.";
	$v2="ivry/concess/poste";
		}
		



	}

if($nom==$concess)
	{
	$m1="Je check mon bizness de concessionnaire";
	$v1="ivry/concess/betheconcess";
	}


	
	
	
	


$m5="Je vais me faire voir ailleurs";
$v5=$_SESSION['rue']; 

$_SESSION['flashsene']='concess';


 ?>
</p>
  