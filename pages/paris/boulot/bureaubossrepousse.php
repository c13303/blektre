<?php




 $action1='';
$action2='karma=karma+10';
$action3='place="salle de r�union"';


include("include/panel.php"); 



 ?>
<div id="texte">
  <p><br>
  - Ecoutez, <b><?php echo $nom; ?></b>, je ne sais pas. J'ai besoin de vous r&eacute;&eacute;valuer. Votre retard ce matin n'est pas du meilleur effet devant les clients. J'ai besoin d'&ecirc;tre s&ucirc;r que vous assurerez. </p>
  <?php
      $m1="Je lui jure que m�me si je m'am�liore, ho, j'en r�ve encore 
et je prends un dossier sur lequel je planche pour lui prouver ma sinc�rit�";
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

 














