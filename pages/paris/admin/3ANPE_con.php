
<?php

 include("include/panel.php"); 
$present=player_present($nom,$place);
$present=$present['nom'];

$_SESSION['endroit']='a l`ANPE';
?>

<div id="texte">

  <p>On vous regarde comme si vous &eacute;tiez stupide, mais vous finissez par vous sentir stupide pour de vrai.</p>
  <p>&nbsp; </p>
  <p>&nbsp; </p>
  <p>
  <?php
  if($present)
  {
  $hapen=$present;
  echo $present.' téléphone bruyamment à sa mere pour lui demander son numéro de sécu.';
  $m1="Je fume ".$hapen;
  $v1="sp/fume";
  }
  
  ?>
  </p>
  <p><?php
  
  if($oui)
  {
  
  }
  

$m5="Je me demande si ma vie a un sens et je pète un cable";
$v5="paris/admin/3ANPE_bordel"; 





    ?>
  </p>
 
<?php 
$_SESSION['flashsene']='3ANPE_patiente5';
 ?>

 
