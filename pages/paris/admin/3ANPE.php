
<?php

 $action1='place ="ANPE"';
$action2="retour='paris/admin/3ANPE_bordel'";
include("include/panel.php"); 
$present=player_present($nom,$place);
$present=$present['nom'];
  $vire=check_point($id,'vire');


$clodo=check_special('clochard');
$_SESSION['endroit']='a l`ANPE';
?>

<div id="texte">

  <p>Vous &ecirc;tes dans le bureau de l'ANPE. Une brune fadasse vous donne un num&eacute;ro.<br>
  - Vous irez au guichet A quand votre num&eacute;ro apparaitra, dit elle. Bonne chance. Faut vraiment s'acharner pour aller au bout.</p>
  <p>Vous attendez votre tour patiemment dans la salle d'attente.</p>
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
$v4="paris/admin/3ANPE_patiente"; 
$m5="Je sors";
$v5="paris/admin/3administration"; 

$_SESSION['flashsene']='3ANPE';



    ?>
  </p>
 
<?php
$hapen=$present;
  ?>

 
