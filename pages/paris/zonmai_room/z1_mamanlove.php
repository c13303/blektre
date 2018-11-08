<?php

 $action1='karma = karma+10';
$action2='';
$action3='';
$bonus1="karma";
include("include/panel.php"); 
?><div id="texte"><?php
echo "<br/>
<br/>- Maman, je ... je t'aime.




.";


if ($road1=='branletel')
{
echo "<br/><br/>Vous vous astiquez fortemment et jutez partout sur la commode.";
$action2='UPDATE `players` SET road1 = "joui" WHERE nom = "'.$nom.'" LIMIT 1';
requete($action2);
}


echo "<br/><br/>- C'est gentil ça mon chéri. J'espère que tu ne fumes pas trop.";

?>




  <?php 
  $m1="Je raccroche promptement.";
$v1="paris/zonmai_room/z1_raccroche";
$m2="Je lui demande si elle peut me pr&ecirc;ter de l'argent";
$v2="paris/zonmai_room/z1_mamanargent";
$m3="Je lui dis d'aller se faire enculer, grosse vache";
$v3="paris/zonmai_room/z1_mamanfuck"; 
  
  
    ?>

  
   
<?php 
$_SESSION['flashsene']='maman';
 $mere=check_family($nom);
$perso2=$mere['mere'];
 



?>

 



















