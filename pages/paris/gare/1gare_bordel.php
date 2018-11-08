
<?php

 include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];



?>

<div id="texte">

Vous saisissez un extincteur et le balancez &agrave; travers la vitre du guichet, qui s'av&egrave;re &ecirc;tre en plexiglas doubl&eacute; et l'extincteur vous revient dans la gueule. 


  <?php
update_stat($nom,'life','-20');
$malus1="life";
in_log($nom, 'Vous vous projetez un extincteur dans la gueule','aie');
$entree='';
$entree2='';



   
$m5="je ramasse mes dents et je me tire";
$v5=$retour; 





    ?>
  </p>
  <p>&nbsp;</p>
 
<?php  ?>

 
