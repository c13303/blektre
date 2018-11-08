
<?php

 include("include/panel.php"); 
$corres=$_GET['entree'];
$msg=$_GET['entree2'];
$date = date("d-m-Y");
$heure = date("H:i");



?>

<div id="texte">

Messages effacés.

    <?php
requete('DELETE FROM messagerie WHERE player="'.$nom.'";');
  
 
$entree='';
$entree2='';


$m4="J'appelle quelqu'un";
$v4='sp/telephone_appel'; 

$m5="Je raccroche";
$v5=$retour; 





    ?>
  </p>
 
<?php 
$_SESSION['flashsene']='telephone';
 ?>

 
