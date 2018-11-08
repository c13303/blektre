<?php  $action1="karma=karma+50";
$action3='place="cafe"';
 require("include/panel.php");
 
 $hapen=$_SESSION['hapen'];
 
 ?>
 
 <div id="texte">
 Vous traitez <b><?php echo $hapen; ?></b> de tafiole. Il vous ignore.
 
 

 <?php
 in_log($nom,'Vous traitez '.$hapen.' de tafiole','classe bravo');
 in_log($hapen, $nom.' vous traite de tafiole','boulé');
 $bonus1='karma';
 

    $m1="Je vais dans mon bureau";
$v1="paris/boulot/bureau";
$m2="Je me tire";
$v2="paris/_street/street";
$m3="Je le fume";
$v3="sp/fume";

    ?>




   
<?php 
$_SESSION['flashsene']='cafe2';
 ?>

 
























