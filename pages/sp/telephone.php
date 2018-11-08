
<?php

 include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$dj=check_special('tube');


?>

<div id="texte">



  <p>Vous décrochez le combiné. </p>
  <p>
    <?php



$m1="J'écoute mes messages";
$v1="sp/telephone_messages";
$m2="J'apelle quelqu'un";
$v2="sp/telephone_appel";


$entree='';
$entree2='';



$m5="Je raccroche";
$v5=$retour; 


$_SESSION['flashsene']='telephone';


    ?>
  </p>


 
