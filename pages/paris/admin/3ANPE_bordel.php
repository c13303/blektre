
<?php

 $action1='karma=karma-50';
include("include/panel.php"); 
$present=player_present($nom,$place);
$present=$present['nom'];


?>

<div id="texte">

  <p>Complètement à bout de nerfs, vous commencez &agrave; vociferer &agrave; la salope du guichet que, putain de merde &ccedil;a commence &agrave; vous foutre les jetons toute cette saloperie d'administration de vos couilles, qu'il suffirait qu'on vous donne un putain de boulot et que tout irait super bien, avant d'essayer de lui faire bouffer la plante verte fraichement arros&eacute;e.</p>
  <p>Ensuite, vous ne savez plus trop, mais vous vous reveillez dans la rue, la nuit est tomb&eacute;e, et vous avez sacr&eacute;ment mal au derri&egrave;re. Vous vous relevez et pestez contre ce monde de merde. <br>
  </p>
  <p>&nbsp; </p>
  <p>
 
  </p>
  <p><?php
 
  
  
  
in_log($nom,'Vous vous êtes fait défoncer par l`administration','Pauvre con');
update_stat($nom,'life','-10');
$malus1="life";
$_SESSION['flashsene']="43bordel";
$m5="Je rentre à la zonmai, dégouté de la vie";
$v5="paris/zonmai/zonmai"; 





    ?>


 
