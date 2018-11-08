<?php  $action3='place="chez josiane"';
$action3='karma=karma-50';
$malus1="karma";

 include("include/panel.php");
 

 ?>
<div id="texte">
 
  <p>Vous chialez comme une grosse daube et Josiane feint l'indifference totale.
   
</p>
  <p>- Tu va pas me refaire ton num&eacute;ro. </p>
  
  
  
  
  <?php 
  
$m1="Je ferai sa vaisselle et je passerai l'aspirateur";
$v1="paris/josiane/chezjosiane_vaisselle";
$m2="Je la fume";
$v2="paris/josiane/chezjosiane_fume";
$m3="Je prends un air t&eacute;n&eacute;breux et je me casse";
$v3="paris/_street/streetnord";
  
  
    ?>



 
<?php 
$_SESSION['flashsene']='chezjosianeopen';
$present=player_present($nom,$place);
$hapen=$present['nom'];
 ?>

 
























