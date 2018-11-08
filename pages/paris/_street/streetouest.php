<?php




 $action1='';
$action2='retour="paris/_street/streetouest"';
$action3='place="Ouest de la ville"';
$_SESSION['rue']="paris/_street/streetouest";
include("include/panel.php"); 

 ?><div id="texte">
 
 
 <?php
 

 
  $tube=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="tube";'));
   $josie_lover=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="josie_lover";'));
echo "<br/>
Vous filez au volant de votre Lada tunée, avec <b>".$tube['title']."</b> de <b>".$tube['player']." </b> à donf dans l'autoradio. 
<br>
Vous êtes à l'ouest de la ville, ce quartier glauquasse un peu abandonné de tous.<br>";



$hapen=$present;
if ($hapen)
{echo $present."  vous dépasse dans sa voiture ridicule, et arbore un air de suffisance assez irritant.<br/>";
requete('UPDATE `players` SET place="Sud de la ville" WHERE nom = "'.$hapen.'" LIMIT 1;');
  
  $m1='Je frime de même';
$v1="paris/_street/streetdissident";
$m2="Je continue dans le quartier";
$v2="paris/_street/streetouest";
$m4="Je mets Skyrock et je trace ma route, tel K2000";
$v4="paris/_street/streetcenter";
}
else
{
  
  
  
  
  $m1='Je vais à l`église de Fientologie';
$v1="paris/eglise/12eglise";
$m2="Je vais au cimetière";
$v2="paris/cimetiere/13cimetiere";
$m3="Je vais dans le bois du muguet";
$v3="paris/teuf/14bois";


$m4="Je retourne dans le centre ville";
$v4="paris/_street/streetcenter";



	
	
	
}
  ?>

  


   
<?php 
$_SESSION['flashsene']='street_ouest';
$fapen=$hapen;
$opt1=$tube['title'];
 ?>

 














