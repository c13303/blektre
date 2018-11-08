<?php
 $action1='life = life - 1';
$action2='frakass = frakass+5';
$action3='';



include("include/panel.php");
?>
<div id="texte">
<?php
in_log($nom,"Vous roulez un cône",'');
echo "<br/>
La vie est molle. ";
echo "<br/>Le monde est mal fait. Ou sont les croissants, les femmes nues ? Pourquoi les caniches peuvent-ils encore sévir sur nos trottoirs ? Tant de questions révoltantes vous affligent d'une mauvaise humeur en ce jour grâcieux de votre promotion.";


$bonus1="frakass";
 $malus1="life";


  $m1="Je roule un autre cône";
$v1='paris/zonmai_room/z1_room_bedo2';
$m2="Je déprime salement <br/>en attendant d'être assez au bout du rouleau<br/>pour rouler un autre cône";
$v2="paris/zonmai_room/z1_deprime";
$m3="J'essaye de me sevrer car la drogue c'est mal";
$v3="paris/zonmai_room/z1_sevrage";
  
  
    ?>

  

   
<?php 
$_SESSION['flashsene']='bedo';
 ?>

 


























