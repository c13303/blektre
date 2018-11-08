
<?php

 $action1='place ="aux ASSEDIC"';
$action2="retour='paris/admin/3ANPE_bordel'";
include("include/panel.php"); 
$present=player_present($nom,$place);
$present=$present['nom'];
$hapen=$present;


$_SESSION['endroit']='aux ASSEDIC';
?>

<div id="texte">

  <p>Vous &ecirc;tes dans le bureau des ASSEDIC, genre pas tr&egrave;s content. Une blonde hideuse vous donne un num&eacute;ro.<br>
  - Vous irez au guichet C quand votre num&eacute;ro apparaitra, dit elle.</p>
  <p>Vous attendez votre tour patiemment dans la salle d'attente.</p>
  <p>&nbsp; </p>
  <p>
  <?php
  if($present)
  {
  echo $present.' attends également son tour, stupidement. Vous ne comprenez pas comment ce genre d`individu peut espèrer trouver du travail avec une gueule pareille.';
  }
  
  ?>
<?php
  
  if($oui)
  {
  
  }
  
  $m4="Je patiente.";
$v4="paris/admin/4ASSEDIC_patiente"; 
$m5="Je sors";
$v5="paris/admin/3administration"; 


$_SESSION['flashsene']='4ASSEDIC';


    ?>
  </p>
 
<?php  ?>

 
