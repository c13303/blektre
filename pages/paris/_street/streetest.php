<?php




 $action1='';
$action2='retour="paris/_street/streetest"';
$action3='place="Est de la ville"';
$fplace='est_present';
$_SESSION['rue']='streetest';
include("include/panel.php"); 

 ?><div id="texte">
 
 
 <?php
 
  $tube=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="tube";'));
   $josie_lover=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="josie_lover";'));
echo "<br/>
Vous filez au volant de votre Lada tunée, avec <b>".$tube['title']."</b> de <b>".$tube['player']."</b> à donf dans l'autoradio, entre deux publicités. 
Vous êtes dans l'Est de la ville, le quartier hot, le quartier qui a envie de niquer, comme vous vous aimez à l'appeller pour vous-même en ricanant bêtement. 
<br>";



$hapen=$present;
if ($hapen)
{echo $present."  vous dépasse dans sa voiture ridicule, et arbore un air de suffisance assez irritant.<br/>";
requete('UPDATE `players` SET place="Centre ville" WHERE nom = "'.$hapen.'" LIMIT 1;');
  
  $m1='Je frime de même';
$v1="paris/_street/streetdissident";
$m2="Je continue dans le quartier";
$v2="paris/_street/streetest";
$m4="Je mets Skyrock et je trace ma route, tel K2000";
$v4="paris/_street/street";
}
else
{
  
  $lover=$josie_lover['player'];
  if ($lover!=$nom)
  {
$m2="Je vais chez ".$lover;
$v2="paris/josielover/josielover";
  }
  
  
  $m1='Je vais au bar';
$v1="paris/blackbar/bar";

$m3="Je vais dans la petite ruelle sombre <br/>qui sent pas très bon";
$v3="paris/ruelle/erre";
$m4="Je vais au nord la ville";
$v4="paris/_street/streetnord";
$m5="Je vais dans le sud, mon quartier";
$v5="paris/_street/street";
}
  ?>

  


   
<?php 
$_SESSION['flashsene']='street_est';
$opt1=$tube['title'];
$fapen=$hapen;
 ?>

 














