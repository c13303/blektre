<?php

 $action1='road3="bosslove"';
$action2='sex=sex+10';
$action3='';
include("include/panel.php"); 


?>
<div id="texte">
<p>Tout le monde est stup&eacute;fait, tout pourrait porter &agrave; croire que vous avez scandalis&eacute; quelques personnes. </p>
<p>- <b><?php echo $nom; ?></b> ... Qu'est ce que .. ? </p>
<p>&nbsp;</p>


  <?php if($present)
{
$hapen=$present;
echo $present." chuchotte quelquechose à Patricia.<br/>";
}
  
$m1="Je les envoie tous se faire poncer le colon";
$v1="paris/boulot/boulot_virage";
$m2="Je chiale comme une merde";
$v2="paris/boulot/boulot_chiale";
$m3="Je fume le patron";
$v3="paris/boulot/bureaubossfume";


$perso2=check_special('patron');
$_SESSION['flashsene']='boulotreunionvener';

 ?>
