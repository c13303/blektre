<?php




 $action1='';
$action2='retour="paris/_street/streetcenter"';
$action3='place="Centre ville"';
$fplace='center_present';
$_SESSION['rue']='streetcenter';$_SESSION['flashsene']='street_center';
include("include/panel.php"); 

 ?>




<div id="texte">
 
 
 <?php
 
$controled=get_time_point($id,'controled');
$past=$time-$controled;
$keuf=check_special('keuf');
if (($karma>1500||$karma<-800)&&$past>200)
{
no_point($id,'controled');
echo "Un girophare apparait dans votre rétroviseur, et vous vous rangez sur le côté.<br>- ".$keuf.", gendarmerie nationale. Nous, enfin je, procédons à un contrôle.";

in_log($nom,'Vous vous faites interpeller par '.$keuf.' le keuf','bad karma');
$hapen=$keuf;
$endroit="au centre ville";
$m1="Je ... merde putain";
$v1="paris/keuf/_flic"; 
 
  
  include('include/exit.php');
}

 
 
 
 
 
  $tube=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="tube";'));
  
   $conseil=mysqli_fetch_assoc(requete('SELECT * FROM pedia WHERE definition!="" ORDER BY RAND() LIMIT 1;'));
   $conseil=$conseil['definition'];
echo '<p>Vous filez au volant de votre Lada tunée, avec <b>'.$tube["title"].'</b> de <b>'.$tube["player"].'</b> à donf dans l`autoradio, entre deux publicités. </p>

<p>Un talk show passe à la radio. Un type qui a du mal dans la vie se fait conseiller par une animatrice.</p><p><span class="Style3">- "'.$conseil.' ! Bon, auditeur suivant."</span></p>

</p><p>Vous êtes dans le centre de la ville, le quartier de la gare et de l`administration.</p>
';

$hapen=$present;
if ($hapen)
{echo $present."  vous dépasse dans sa voiture ridicule, et arbore un air de suffisance assez irritant.<br/>";
requete('UPDATE `players` SET place="Sud de la ville" WHERE nom = "'.$hapen.'" LIMIT 1;');
  
  $m1='Je frime de même';
$v1="paris/_street/streetdissident";
$m2="Je continue dans le quartier";
$v2="paris/_street/streetcenter";
$m4="Je mets Skyrock et je trace ma route, tel K2000";
$v4="paris/_street/streetest";
}
else
{
  
  
  
  
  $m1='Je vais à la gare';
$v1="paris/gare/1gare";
$m2="Je vais dans le quartier administratif";
$v2="paris/admin/3administration";
	$m4='Je vais à l`ouest, à la sortie de la ville';
	$v4='paris/_street/streetouest';
$m5="Je vais dans le sud, mon quartier";
$v5="paris/_street/street";

	$m3='Je vais au nord de la ville';
	$v3='paris/_street/streetnord';
	
	
	
}


$fapen=$hapen;
$opt1=$tube['title'];
 ?>

 





