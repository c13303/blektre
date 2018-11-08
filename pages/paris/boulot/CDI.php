<?php

 $action1='karma = karma+100';
$action1='money = money+200';
$action3='best=best+1000';

include("include/panel.php"); 
in_log($nom, "Vous avez signé votre CDI", "1000 points");
 in_point($id,"CDI");
?>
<div id="texte">
  <p>Le patron semble enthousiaste. &quot;C'est le grand jour, apr&egrave;s tout !&quot; dit il tout exit&eacute;. Il vous sort le contrat qui &eacute;tait d&eacute;j&agrave; pr&ecirc;t ! Vous le signez avec all&eacute;gresse. Vous voila officiellement employ&eacute; chez PACO RABANNE SARL. A vous la vie de merde, &agrave; vous le quotidien avec tout ces coll&egrave;gues minables, &agrave; vous le bonheur. </p>
  <p>Voil&agrave; qu'il vous tend deux billets de cent euros. &quot;Une petite avance. Vous l'avez bien m&eacute;rit&eacute;e.&quot; Il s'&eacute;loigne en souriant de fa&ccedil;on coquine.  </p>
 
  

  <?php 
    $m1="Je vais cruiser à la machine à café le torse bombé ";
$v1="paris/boulot/cafe";
$m2="Je reste travailler dans mon bureau";
$v2="paris/boulot/bureau";
$m3="Je le rattrape dans le couloir et je le fume";
$v3="paris/boulot/bureaubossfume";
  
    ?>

 
<?php 

$_SESSION['flashsene']='CDI';
$perso2=check_special('patron');
 ?>

 


























