<?php


$action3='';
include("include/panel.php"); 
?>
<div id="texte">
  <p>- Mon ch&eacute;ri, tu as recommenc&eacute; &agrave; prendre de la drogue ? </p>
  <p>- Mais non maman, je signe mon CDI aujourd'hui et j'ai besoin de m'acheter un costard.</p>
  <p>- Tu as recommenc&eacute; la drogue.</p>
  <p>- Maman, putain de merde !!</p>
  <p>- Tu devrais venir passer quelques jours &agrave; la maison. </p>

  <?php 
  
   $m1="J'exprime ma gratitude et je raccroche";
$v1="paris/zonmai_room/z1_raccroche";
$m2="Je raccroche";
$v2="paris/zonmai_room/z1_raccroche";
$m3="J'invite cette grosse vache à aller se faire ramoner";
$v3="paris/zonmai_room/z1_mamanfuck"; 

   ?>

 
<?php 
$_SESSION['flashsene']='maman';
 $mere=check_family($nom);
$perso2=$mere['mere'];
 



?>

 





