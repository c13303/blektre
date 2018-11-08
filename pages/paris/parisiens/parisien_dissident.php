
<?php

 $action1='place ="rue des noyés"';
$action1='karma = karma+2';
include("include/panel.php"); 
// REQUETE LOG:
$bonus1="karma";

?>

<div id="texte">

  <p>- Tout le monde se d&eacute;tend tout de suite !!! hurlez vous &agrave; l'assembl&eacute;e. Le temps semble s'&ecirc;tre arr&ecirc;t&eacute;.  </p>
  <p>&nbsp;</p>
<?php
echo $present."  retient son poing qui s'apprêtait visiblement à vous arriver dans le visage.<br/>";



  
    $m1="Je prends ma caisse et je me tire";
$v1="paris/_street/street";
$m2="J'explique calmement les raisons de mon geste";
$v2="paris/parisiens/parisien_explique";
$m3="Je profite de l'effet de surprise pour tous les fumer ";
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

 
