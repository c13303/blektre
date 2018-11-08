<?php 


 include("include/panel.php"); 

$hapen=player_present($nom,$place);
$hapen=$present['nom'];
$vendeuse=check_special('vendeuse');

?>

<div id="texte">
  <p>Vous amenez un exemplaire du godemichet "Hello Kitty&quot;  à la vendeuse qui sourit en coin.</p>
  <p>-4000 euros, monsieur.    
    <?php
$cb=check_point($id,'CB');
if($cb||$money>3999)
{
	if(!$cb)
	{
		update_stat($nom,'money','-4000');
		echo '<br><br>Vous lachez 4000 euros. <br>La vendeuse emballe votre gode et vous le range dans un sac plastique. <br>
		- Merci et bonne journée monsieur.
		<br>
		';
	}
	else
	{
	echo '<br>Vous introduisez la carte bleue de votre pauvre mère dans la machine et tapez votre date de naissance comme code. Le paiement est accepté mais la carte est détruite sous pretexte que le compte vient d`etre vidé. Qu`importe, la vendeuse emballe votre gode et vous le range dans un sac plastique. <br>
	- Merci et bonne journée monsieur.
	<br>
	';
	}
	in_point($id,'gode');
	no_point($id,'CB');
	in_log($nom,'Vous achetez un gode Mon Petit Poney à Parly II','noel');
	in_log($vendeuse,'Vous vendez un gode Mon Petit Poney à '.$nom,'4000 euros, bien arnaqué');
	update_stat($vendeuse,'money','+400');

}
else
{
echo '<br><br>- Est ce que je peux l`acheter à crédit ? demandez vous de façon piteuse. <br>La vendeuse vous adresse un sourire navré.';
$m1="Je la fume";
$v1="paris/shop/5bordel";
}


$m2="Je sors";
$v2="paris/shop/5commerce";



 
if($vendeuse==$nom)
{$opt1='noplayer';}
if($voyante==$nom)
{$opt1='noplayer';}

$perso2=$vendeuse;
$perso3=$voyante;
$_SESSION['flashsene']="5accessoire";
 
?>
    </p>
 
