
<?php

 $action1='place ="zonmai"';
require("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$hapen=$_SESSION['hapen'];

$hapensex=check_stat($hapen);
$hapensex=$hapensex['sex'];

$drogue=check_rank('dealer');
$drogue=$drogue['title'];


?>

<div id="texte">


  <p>Comme vous vous kiffez grave, vous d&eacute;cidez de vous mettre en m&eacute;nage avec <b><?php echo $hapen; ?></b> qui r&acirc;le en faisant la vaisselle pendant que vous regardez le foot &agrave; la t&eacute;l&eacute;. </p>
  <p>&nbsp;</p>
  <p></p>
  <p>&nbsp;</p>
  <p> 
    <?php
	
	// check the conjoint //
	
	// require nom et hapen
	require('include/maquage.php');
	
	
	
   $m1="C'est amour et bonheur.";
   $v1="paris/zonmai/zonmai";
   $m2="Je baise mon conjoint pour fêter ça";
   $v2="paris/zonmai/zonmai_child";

	
	

$m3="Je me tire";
$v3="paris/_street/street"; 





    ?>
  </p>
  </p>
 
<?php 
$perso2=$hapen;
$_SESSION['flashsene']="zonmai_tele";
 ?>

 
