
<?php

 include("include/panel.php"); 
$present=player_present($nom,$place);
$present=$present['nom'];

$_SESSION['endroit']='a l`ANPE';
?>

<div id="texte">

  <p>Votre tour arrive enfin, le guichet A ferm&eacute;, vous vous rendez au guichet B.<br>
    <br>
  - Ah, monsieur, ce ticket est valable pour le guichet A. Vous devez reprendre un num&eacute;ro, vous annonce une  rousse qui aurait pu avoir du charme si elle n'&eacute;tait pas ob&egrave;se et couverte d'acn&eacute;.. </p>
  <p>&nbsp; </p>
  <p>
  <?php
  if($present)
  {
  $hapen=$present;
  echo $present.' s`avance et propeste, car en tout état de cause, c`est son tour.';
  $m1="Je fume ".$hapen;
  $v1="sp/fume";
  }
  
  ?>
  </p>
  <p><?php
  
  if($oui)
  {
  
  }
    $m2="Je fume la guichetierre.";
$v2="paris/admin/3ANPE_bordel"; 
  $m4="Je reprends un numéro et je patiente.";
$v4="paris/admin/3ANPE_patiente4"; 
$m5="Je sors";
$v5="paris/admin/3administration"; 





    ?>
  </p>
 
<?php  ?>

 
