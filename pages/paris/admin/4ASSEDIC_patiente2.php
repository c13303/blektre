
<?php

 include("include/panel.php"); 
$present=player_present($nom,$place);
$present=$present['nom'];
$perso2=$present;

?>

<div id="texte">

  <p>Vous commencez &agrave; penser qu'on se fout s&eacute;rieusement de votre gueule. C'est alors que le guichet A ferme son volet alors que votre num&eacute;ro n'est pas encore pass&eacute;. </p>
  <p>&nbsp; </p>
  <p>
  <?php
  if($present)
  {
  $hapen=$present;
  echo $present.' essaie une à une les sonneries de son téléphone portable, et cela vous agace profondemment.';
  $m1="Je fume ".$hapen;
  $v1="sp/fume";
  }
  
  ?>
  </p>
  <p><?php
  
  if($oui)
  {
  
  }
  
  $m3="Je patiente.";
$v3="paris/admin/4ASSEDIC_patiente3"; 
  $m4="Je craque";
$v4="paris/admin/3ANPE_bordel"; 
$m5="Je sors";
$v5="paris/admin/3administration"; 





    ?>
  </p>
 
<?php  ?>

 
