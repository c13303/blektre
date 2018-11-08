<?php 


 include("include/panel.php"); 


$vendeuse=check_special('vendeuse');

?>

<div id="texte">
  <p><?php echo $vendeuse; ?> , la vendeuse, traine molement entre les rayonnages de sa boutique. </p>
 <p>A vrai dire, ils n'y vendent que de la merde, si ce n'est peut etre ce magnifique stock de godemichet &quot;Hello Kitty &quot; qui fait la fiert&eacute; de l'enseigne, et que les gens viennent voir de loin. Une etiquette 4000 &euro; tr&ocirc;ne sur l'&eacute;talage. Vous soupirez.
    <?php
$present=player_present($nom,$place);
$present=$present['nom'];
if($present)
{
$hapen=$present;
echo $hapen.' regarde stupidement la montagne de godes. ';
$m3=$hapen.'me nargue de toute évidence et je le fume';
$v3="sp/fume";
}


$m1="J'achete un gode ";
$v1="paris/shop/5accessoire_gode";
$lab=check_point($id,'looklabrador');
if($lab)
{
$m2='Je cherche un labrador';
$v2='paris/shop/5accesslabrador';
}



$m5="Je sors";
$v5="paris/shop/5commerce";



 

if($vendeuse==$nom)
{$opt1='noplayer';}
if($voyante==$nom)
{$opt1='noplayer';}

$perso2=$vendeuse;
$perso3=$voyante;

 $_SESSION['flashsene']='5accessoire';
?>
 </p>
 <p>Il y aussi des capotes &quot;Mon Petit Poney&quot; à 10 balles la boite.</p>
 <?php
 
 if($money < 100) echo "Vous n'avez pas assez d'argent pour en acheter.";
 else
 {
 $m2="J'achete une boite de capotes";
$v2='paris/shop/capotes';
 }
 ?>
