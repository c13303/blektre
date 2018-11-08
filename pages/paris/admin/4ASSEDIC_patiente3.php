
<?php

 include("include/panel.php"); 
$present=player_present($nom,$place);
$present=$present['nom'];



$clodo=check_special('clochard');

?>

<div id="texte">

  <p>Votre tour arrive enfin, le guichet C ferm&eacute;, vous vous rendez au guichet A.<br>
    <br>
  - Ah, monsieur, ce ticket est valable pour le guichet C. Vous devez reprendre un num&eacute;ro, vous annonce une vieille peau qui aurait pu avoir du charme si elle avait été jeune et pas aigrie.</p>
  <p>&nbsp; </p>
  <p>
  <?php
  if($present)
  {
  $hapen=$present;
  echo $present.' s`avance et proteste, car en tout état de cause, c`est son tour.';
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
$v4="paris/admin/4ASSEDIC_patiente4"; 
$m5="Je sors";
$v5="paris/admin/3administration"; 





    ?>
  </p>
 
<?php  ?>

 
