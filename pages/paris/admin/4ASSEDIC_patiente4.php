
<?php

 include("include/panel.php"); 
$present=player_present($nom,$place);
$present=$present['nom'];

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
  


  $m4="Je patiente.";
$v4="paris/admin/4ASSEDIC_patiente5"; 
$m5="Je sors";
$v5="paris/admin/3administration"; 





    ?>
  </p>
 
<?php  ?>

 
