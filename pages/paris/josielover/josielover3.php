
<?php

 $action1='place ="3, rue des Glands"';
$action2="retour='paris/_street/streetest'";
include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$dj=check_special('tube');
$josielover=check_special('josie_lover');
$endroit="chez ".$josielover;
?>
<div id="texte">

  <p><?php echo $josielover; ?> rit de fa&ccedil;on narquoise.</p>
  <p>-  Josiane est une pauvre conne.. Je la baise juste comme &ccedil;a, dit il en ricanant avec snobisme. </p>
  <p>D&eacute;cidemment, c'est un fils de pute accompli. La col&egrave;re vous monte au nez. Vous vous retenez de latter <?php echo $josielover; ?>, par amour pour Josiane.</p>
  <p>    <?php


 if ($present && $present!=$josielover)
 {
 echo $present." éclate le score à Tétris et hurle de joie. <br>";
 $hapen=$present;
 $m1="Je vais fumer ".$present;
 $v1="sp/fume";
 
 }
?>
</p>

  <p>&nbsp;</p>
  
  <?php

$entree='';
$entree2='';

$m2="Je lui explique que je vaux mieux que lui<br> et qu'il ferait mieux de se peter la tchave car <br>j'vais lui tchourer sa meuss";
$v2="paris/josielover/josielover4";

$m3="Je me tire";
$v3="paris/_street/streetest";     
     





    ?>
 
<?php 
$perso2=$josielover;
$_SESSION['flashsene']='josielover2';
 ?>

 
