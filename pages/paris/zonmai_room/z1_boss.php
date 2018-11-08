
<?php

 $action1='';
$action2='';
$action3='';
include("include/panel.php"); 
?><div id="texte"><?php



$patron=check_special("patron");





$what=check_point($id,"vire");
if ($what)
{
echo "La secrétaire vous met en attente. Une heure passe.";
$m1="Je me sens con et je raccroche.";
$v1="paris/zonmai_room/z1_raccroche";
 
$_SESSION['flashsene']='message';
 
include('include/exit.php');

}

if ($patron==$nom)
{
echo "Vous entendez votre propre voix dans le téléphone. Vous vous sentez con.";
$m1="Oui, je me sens con, mais je suis le patron.";
$v1="paris/zonmai_room/z1_raccroche";
 
$_SESSION['flashsene']='message';
 
include('include/exit.php');
}





echo "<br/>".$patron.", votre patron décroche le téléphone au bout de deux sonneries, à peine.<br/><br/>
<br/>- Nom de Dieu, ".$nom.", qu'est ce que vous fichez !!! On vous attend depuis 9h, les clients sont là ...
<br/>- Ecoutez patron ...";




 
$m1='"Je suis vraiment navré. J`arrive tout de suite"';
$v1="paris/_street/street";
$m2='"Je voulais vous dire ... Je vous aime"';
$v2="paris/zonmai_room/z1_bosslove";
$m3="Je t'encule toi et le client. Vasy, dis lui.";
$v3="paris/zonmai_room/z1_bossencule";

  
  
  
  
    ?>

     
<?php 
$_SESSION['flashsene']='boss';
$perso2=$patron;



 ?>

 





























