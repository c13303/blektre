
<?php

 include("include/panel.php"); 


$hapen=check_special('voyante');
$voyante=$hapen;
$perso2=$vendeuse;
$perso3=$hapen;
?>

<div id="texte">
<?php
if($money<12)
{
echo "T'as pas les moyens, gadjo! ";
$m2='Je la fume';
$v2='paris/shop/5_fumevoyante';
$m3='Rien. Je bouge de là';
$v3='paris/shop/5commerce';
 
 
include('include/exit.php');
}
else
{
	update_stat($nom, 'money','-12');
	update_stat($hapen, 'money','+12');
   	$malus1="money";
}

echo 'Alors Gadjo, qu`est ce que tu veux savoir ?';
$entree='Sujet';
$m1='Dites moi tout à ce propos';
$v1='paris/shop/5voyante_parse';
$m3='Rien. Je bouge de là';
$v3='paris/shop/5commerce';

 



$_SESSION['flashsene']='5voyante';
  
include('include/exit.php');
?>