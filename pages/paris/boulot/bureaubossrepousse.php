<?php




 $action1='';
$action2='karma=karma+10';
$action3='place="salle de réunion"';


include("include/panel.php"); 



 ?>
<div id="texte">
  <p><br>
  - Ecoutez, <b><?php echo $nom; ?></b>, je ne sais pas. J'ai besoin de vous r&eacute;&eacute;valuer. Votre retard ce matin n'est pas du meilleur effet devant les clients. J'ai besoin d'&ecirc;tre s&ucirc;r que vous assurerez. </p>
  <?php
      $m1="Je lui jure que même si je m'améliore, ho, j'en rêve encore 
et je prends un dossier sur lequel je planche pour lui prouver ma sincérité";
$v1="paris/boulot/boulot_dossier";
$m2="Je chiale comme une merde";
$v2="paris/boulot/boulot_chiale";
$m3="Je fume le patron";
$v3="paris/boulot/bureaubossfume";
  
  
    ?>

 

<?php 
$perso2=check_special('patron');
$_SESSION['flashsene']='CDI';
 ?>

 














