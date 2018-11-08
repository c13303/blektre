
<?php

 $action1='place ="rue des noyés"';
$action1='karma = karma + 3';
include("include/panel.php"); 
$bonus1="karma";
?>

<div id="texte">

  <p>- Voyez vous, je voulais exprimer par mon geste, vulgaire s'il en est, insultant, certes, sale, relativement, pour exprimer mon d&eacute;sarroi face &agrave; la d&eacute;cr&eacute;pitude de notre soci&eacute;t&eacute; qui refl&egrave;te bel et bien le d&eacute;clin de notre civilisation toute enti&egrave;re.</p>
  <p>Cela fonctionne, les gens sont barb&eacute;s et commencent &agrave; se disperser.  </p>

<?php
if($present)echo $present."  s'éloigne en grognant.<br/>";


   $m1="Je prends ma caisse et je me tire";
$v1="paris/_street/street";
$m2="J'erre sans but";
$v2="paris/suicide/suicide";
$m3="Je fume quelqu'un au hasard dans la rue";
$v3="paris/parisiens/parisien_violence2"; 

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

 
