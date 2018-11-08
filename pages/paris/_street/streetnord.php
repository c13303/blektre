<?php

 $action1='';
$action2='retour="paris/_street/streetnord"';
$action3='place="Nord de la ville"';
$fplace='nord_present';
include("include/panel.php"); 
$_SESSION['rue']='streetnord';
 ?><div id="texte">
 
 
 <?php
 

 $lastletter=mysqli_fetch_assoc(requete('SELECT * FROM messagerie ORDER BY RAND() LIMIT 1;'));
  $tube=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="tube";'));

$infos=mysqli_fetch_assoc(requete('SELECT *
FROM `log`
ORDER BY id DESC
LIMIT 1 , 1;'));



echo "<br/>
Vous filez au volant de votre Lada tunée, avec <b>".$tube['title']."</b> de <b>".$tube['player']."</b> à donf dans l'autoradio, entre deux publicités. 
<br>
<p>-Salut, c'est Josiane et vous êtes dans mon émission: Sex Story !</p>
<p> Aujourd'hui, un message de mongolien de la part de ".$lastletter['from']." qui dit à ".$lastletter['player']." que (je cite): ".$lastletter['message']." !<p> </p> Voilà, on est content pour eux et je vous fais plein de bisous !


</p>
Vous êtes au nord de la ville.<br>";



$hapen=$present;
if ($hapen)
{echo $present."  vous dépasse dans sa voiture ridicule, et arbore un air de suffisance assez irritant.<br/>";
requete('UPDATE `players` SET place="Sud de la ville" WHERE nom = "'.$hapen.'" LIMIT 1;');
  
  $m1='Je frime de même';
$v1="paris/_street/streetdissident";
$m2="Je continue dans le quartier";
$v2="paris/_street/streetnord";
$m4="Je mets Skyrock et je trace ma route, tel K2000";
$v4="paris/_street/street";
}
else
{
  
  
  
  
  $m1='Je vais au centre commercial Parly II';
$v1="paris/shop/5commerce";
$m2="Je vais chez Josiane";
$v2="paris/josiane/chezjosiane";
$m3="Je vais à l'hopital Felix Leclerc";
$v3="paris/hopital/6hopital";


$m4="Je retourne dans le centre";
$v4="paris/_street/streetcenter";


	$m5='Je vais a l`est, le quartier hot';
	$v5='paris/_street/streetest';
	
	
	
}
  ?>

  


   
<?php 
$_SESSION['flashsene']='street_nord';
$fapen=$hapen;
$opt1=$tube['title'];
 ?>

 














