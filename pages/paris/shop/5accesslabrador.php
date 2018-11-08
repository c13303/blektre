<?php 


 include("include/panel.php"); 


$vendeuse=check_special('vendeuse');

?>

<div id="texte">
  <p><?php echo $vendeuse; ?> , la vendeuse, vous regarde de fa&ccedil;on &eacute;tourdie. Puis la question arrive &agrave; son cerveau. </p>
  <p>- Un ouaque ??? Ah, un labradooooor ?? Ho, baaah naaan, on en a plus .... Ils venaient de ivry, mais maintenant y'en a plus, j'sais pas pourquoiiiii. Tu pr&eacute;feres pas un gode Hello Kitty ?? dit elle en machant son chewing-gum..
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
  