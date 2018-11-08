<?php

 $action1='';
$action2='';
$action3='';
include("include/panel.php"); 

?><div id="texte"><?php
echo "<br/>
Vous raccrochez le téléphone et êtes soudainement en proie à une crise d'angoisse existentielle. Vous trouvez soudainement laid et minable, et vous êtes partagé entre choisir de lutter ou vous laisser aller comme une grosse merde, jugeant inutile le fait de se battre.


.";







?>

  <?php 
   $m4="Je vais au boulot parce que ma conscience ne me laissera plus tranquille";
$v4="paris/_street/street";
$m2="Je roule un c&ocirc;ne";
$v2="paris/zonmai_room/z1_room_bedo3";


$r=rand(1, 2); 
if($r==1)

 { 
 $m3="J'ouvre la fen&ecirc;tre pour insulter les gens";
$v3="paris/zonmai_room/z1_parisien";
 }
if($r==2) { 

$m3="Je joue du kazoo, ma seule et unique passion dans la vie";
$v3="paris/zonmai_room/z1_child"; }
  
    ?>

  


   
<?php 
$_SESSION['flashsene']='deprime';
 ?>

 





