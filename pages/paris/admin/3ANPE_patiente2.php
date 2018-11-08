
<?php

 include("include/panel.php"); 
$present=player_present($nom,$place);
$present=$present['nom'];
  $vire=check_point($id,'vire');


$clodo=check_special('clochard');
$_SESSION['endroit']='a l`ANPE';
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
  
  $m2="J'attends la file du guichet C.";
$v2="paris/admin/3ANPE_patiente3"; 
  $m4="J'attends la file du guichet A.";
$v4="paris/admin/3ANPE_patiente4"; 
$m5="Je sors";
$v5="paris/admin/3administration"; 





    ?>
  </p>
 
<?php  ?>

 
