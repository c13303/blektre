<?php

 $action1='';
$action2='';
$action3='';
include("include/panel.php"); 







?><div id="texte"><?php


 $mere=check_family($nom);
 $mere=$mere['mere'];

$mumlife=check_stat($mere);
$mumlife=$mumlife['life'];


$what=check_point($id,'fumemaman');
if ($what || $mumlife<1)
{


echo "Personne ne répond. Vous imaginez les pires scénarios porno gore, et vous vous donnez une gifle pour faire taire ces pensées impures. ".$mere.", votre mère, est une femme exeptionnelle, une femme Barbara Goulde.";
$m2="Je raccroche";
$v2="paris/zonmai_room/z1_raccroche";


    
 $_SESSION['flashsene']='message';

  



include('include/exit.php');
}




echo "<br/>
Le téléphone sonne. ".$mere.", votre mère, laisse entendre sa voix rauque.
<br/>- Allô .. ?
<br/>- Maman.
<br/>- Ho, mon chéri. Tu vas bien ? Tu ne fumes pas trop hein ? Tu sais que c'est mauvais pour toi ..
<br/>- Maman...

.";


update_stat($nom, 'karma','+10');




?>


  <?php 
  $m1="Je lui dis que je pensais &agrave; elle et que je l'aime";
$v1="paris/zonmai_room/z1_mamanlove";
$m2="Je lui demande si elle peut me pr&ecirc;ter de l'argent";
$v2="paris/zonmai_room/z1_mamanargent";
$m3="Je lui dis d'aller se faire enculer, grosse vache";
$v3="paris/zonmai_room/z1_mamanfuck"; 
    ?>

  
   

<?php
$_SESSION['flashsene']='maman';
$perso2=$mere;



  ?>

 





























