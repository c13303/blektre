
<?php

 $action1='place ="rue des noyés"';
$action2='retour="paris/parisiens/parisien_violence"';
include("include/panel.php"); 
?>

<div id="texte">

  <p>Vous fumez le premier type qui se trouve devant vous avec un coup de boule. Tout le monde alors se jette sur vous et vous tabasse &agrave; mort. Vous hurlez, implorer piti&eacute;, cela ne fait que les exiter. Vous subissez, impuissant, le courroux du peuple revolt&eacute;. </p>
<?php
requete('UPDATE `players` SET life=life-10 WHERE nom = "'.$nom.'" LIMIT 1;');
requete('UPDATE `players` SET place="Marave sur le trottoir" WHERE nom = "'.$nom.'" LIMIT 1;');
$malus1="life";



if ($present)
{
$hapen=$present;
echo $present."  se joint au groupe et vous bousille à coups de pieds particulièrement virulents.<br/>";
in_log($hapen, "Vous avez participé au lynchage de ".$nom." dans la rue", "100 points");
requete('UPDATE `players` SET best=best+100 WHERE nom = "'.$hapen.'" LIMIT 1;');
in_log($nom, "Vous avez été lynché par la foule (dont ".$hapen.") dans la rue",  "pauvre con");
}
else
{
 in_log($nom, "Vous avez été lynché par la foule dans la rue", "pauvre con");
}
?>


  <?php
    $m1="Je chiale comme une merde";
$v1="paris/ruelle/erre";
$m2="Je rentre chez ma m&egrave;re";
$v2="paris/maman/chezmaman";

  
  
     ?>

  
  

 
<?php 

if(!$hapen)
{
$hapen='Blektre';
}
$_SESSION['flashsene']='parisien_violence';

 ?>

 
