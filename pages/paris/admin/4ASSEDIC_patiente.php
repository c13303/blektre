
<?php

 include("include/panel.php"); 
$present=player_present($nom,$place);
$present=$present['nom'];

?>

<div id="texte">

  <p>Vous vous emmerdez sec, et vous vous questionnez sur le bien fond&eacute; de la soci&eacute;t&eacute;. Pourquoi ne pas plut&ocirc;t devenir mendiant ? Tout serait bien plus simple.</p>
  <p>&nbsp; </p>
  <p>
  <?php
  if($present)
  {
  $hapen=$present;
  echo $present.' commence également à perdre patience. Il fait sans cesse des allers et retours aux wc.';
  $m1="Je fume ".$hapen;
  $v1="sp/fume";
  }
  
  ?>
  </p>
  <p><?php
  
  if($oui)
  {
  
  }
  
  $m4="Je patiente.";
$v4="paris/admin/4ASSEDIC_patiente2"; 
$m5="Je sors";
$v5="paris/admin/3administration"; 





    ?>
  </p>
 
<?php 
$perso2=$present;
 ?>

 
