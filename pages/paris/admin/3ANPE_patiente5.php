
<?php

 include("include/panel.php"); 
$present=player_present($nom,$place);
$present=$present['nom'];
  $vire=check_point($id,'vire');

$_SESSION['endroit']='a l`ANPE';
?>

<div id="texte">

  <p>Enfin votre tour arrive de nouveau, et vous vous avancez au guichet B.<br>
  </p>
  <p>- C'est pour quoi ?   </p>
  <p>&nbsp; </p>
  <p>
  <?php
  if($vire)
  {
  $m1="J'ai été viré, je cherche du boulot";
$v1="paris/admin/3ANPE_boulot"; 
  }
  else
  {
  $m1="Je frime parce que j'ai déjà un boulot, un super poste chez PACO RABANNE SARL en plus";
$v1="paris/admin/3ANPE_con"; 
  }
 
  
  ?>
  </p>
  <p><?php
  
  

 
$m5="Je sors";
$v5="paris/admin/3administration"; 





    ?>
  </p>
 
<?php  ?>

 
