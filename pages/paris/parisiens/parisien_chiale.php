<?php




 $action2='karma=karma-30';
$action3='place="rue des noyés"';

$malus1="karma";
include("include/panel.php"); 



 ?>


<div id="texte">Vous vous mettez &agrave; chialer comme une gonzesse et les gens vous laissent passer avec m&eacute;pris. 
 
 

  <?php 
  
  $m1="Je prends la voiture";
$v1="paris/_street/street";
$m2="J'&egrave;re sans but, comme une pauvre &acirc;me en peine";
$v2="paris/ruelle/erre";
$m3="Je tente de me suicider";
$v3="paris/suicide/suicide";
  
    ?>

  
  

   
<?php 

$present=player_present($nom,$place);
$hapen=$present['nom'];
if(!$hapen)
{
$hapen="Blektre";
}
$_SESSION['flashsene']="parisien_rue";
 ?>

 




























