
<?php

 include("include/panel.php"); 
$present=player_present($nom,$place);
$present=$present['nom'];
$_SESSION['endroit']='a l`ANPE';
?>

<div id="texte">

  <p>Votre attendez. Une envie subite de vous tirer une balle vous submerge, puis vous vous resaisissez en songeant &agrave; Josiane, qui serait fi&egrave;re de vous si elle vous voyait. N'emp&ecirc;che que cette petite pouffiasse pourrait se trouver un boulot au lieu de tout le temps vous taxer de l'argent. </p>
  <p>&nbsp; </p>
  <p>
  <?php
  if($present)
  {
  $hapen=$present;
  echo $present.' drague la guichetierre du guichet B, ce qui ralentit considérablement la cadence.';
  $m1="Je fume ".$hapen;
  $v1="sp/fume";
  }
  
  ?>
  </p>
  <p><?php
  
  if($oui)
  {
  
  }

  $m4="Je vais au guichet C";
$v4="paris/admin/3ANPE_patiente2"; 
$m4="Je vais au guichet A";
$v4="paris/admin/3ANPE_patiente5"; 
$m5="Je sors";
$v5="paris/admin/3administration"; 





    ?>
  </p>
 
<?php  ?>

 
