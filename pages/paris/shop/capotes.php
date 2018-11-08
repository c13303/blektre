<?php 
 $action1='money = money - 10';

 include("include/panel.php"); 

$vendeuse=check_special('vendeuse');

?>

<div id="texte">
<p>Vous empochez les capotes avec un sourire g&ecirc;n&eacute;, tandis que la vendeuse affiche un visage parfaitement impassible. Pour vous justifier, vous dites:</p>
<p>- C'est parce que ... je suis un chaud lapin vous savez.</p>
<p>La vendeuse hausse les &eacute;paules et fait claquer sa bulle de chewing-gum. Une douleur subtile, mais pr&eacute;sente, semble se ranimer dans vos fesses.</p>

  <?php




 
if($vendeuse==$nom)
{$opt1='noplayer';}
if($voyante==$nom)
{$opt1='noplayer';}

$perso2=$vendeuse;
$perso3=$voyante;
$_SESSION['flashsene']="5accessoire";

in_bag($id,'capotes','10');
in_log($nom,'Vous achetez des capotes','yo');

 $m1="Hem.";
$v1=$retour;
 
?>

