<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php

include("include/panel.php"); 




$concess=check_special('concess');	$perso2=$concess; if($present)$hapen=$present;

$permis=check_point($id,'permis');

?>

<div id="texte">

<p>Une puissante erection commence &agrave; d&eacute;former votre pantalon, et il s'en agit de peu pour que vous &eacute;viter de mouiller votre culotte. Les larmes au yeux, vous montez au volant du v&eacute;hicule. </p>
<p>
    <?php

	


if($permis)
{
echo '<p>Ayant le permis  poid lourd, vous mettez le contact et rapidement un bruit insupportable emplit le showroom. Vous vous sentez beau, fort, puissant, et sentez que la cons�cration du travail de toute une vie approche � grand pas. Quand Josiane va voir �a, elle saura pertinemment que vous �tes de la trempe des Winner, pas comme tout ces autres bouffons qui lui tournent autour.</p>';
$labi=check_point($id,'look4x4');
$josielover=check_special('josie_lover');
if($josielover==$nom)
{
	if($labi)
		{
		$m1="Je fonce chez Josiane avec mon bolide";
		$v1='ivry/theend/josiane'; 
		}
		else
		{
		echo '<p>N�anmoins, vous la connaissez: elle ne sera pas impression�e par le 4x4 tant que vous ne lui aurez pas offert son putain de labrador avant. Vous descendez donc du v�hicule en m�nageant tant bien que mal votre faci�s face � ce sentiment de frustration grandissant qui vous enveloppe.</p>';
		
		}
}else
{
echo '<p>N�anmoins, il vous faut reconqu�rir le coeur de cette salope qui a d�cid� de sortir avec '.$josielover.' </p>';
}



}
else
{
echo '<p>En bonne petite tapette indolente que vous �tes, vous n`avez pas le permis de conduire pour poids lourds. Voil� qui est f�cheux, car il est totalement improbable de conduire sans ce papier. Il va vous falloir le passer � Paris.</p>';

}

$_SESSION['flashsene']='quatre';
$m5="Putain. Je me casse.";
$v5=$_SESSION['rue']; 

 ?>
</p>
  