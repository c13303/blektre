
<?php

 $action1='place ="zonmai"';
require("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$hapen=$_SESSION['hapen'];

$hapensex=check_stat($hapen);
$lifehapen=$hapensex['life'];
$hapensex=$hapensex['sex'];

$drogue=check_rank('dealer');
$drogue=$drogue['title'];
$fplace='sud_present';

?>

<div id="texte">


  <p>Vous niquez sauvagement toute la nuit avec <b><?php echo $hapen; ?></b> qui hurle toute sa jouissance &agrave; travers le voisinage. Vers 5h du matin, vous fumez votre derni&egrave;re clope en discutant. Tout &ccedil;a est tr&egrave;s romantique. </p>
  <p>- Tu sais, j'ai peur de tomber amoureux, dit <b><?php echo $hapen; ?></b> vous avoue tendrement.</p>
  <p>Vous &eacute;crasez votre m&eacute;got et soupirez un grand coup. </p>
  <p></p>
  <p>&nbsp;</p>
  <p> 
    <?php
	requete('UPDATE `players` SET place="zonmai" WHERE nom = "'.$hapen.'" LIMIT 1;');
	
	in_log($nom,'Vous baisez tout la nuit avec '.$hapen, 'love story +100 points');
	$bonus1="score";
	$malus1="sex";
    in_log($hapen, $nom.' vous baise toute la nuit', 'love story');
	update_stat($nom, 'best', '+100');
	update_stat($nom, 'sex', '-40');
	
	require('pages/sp/_CHILD.php');
	

   $m1="Moi aussi je t'aime.";
   $v1="paris/zonmai/zonmai_couple";
   $m2="Ho, ça va hein. On a niqué, on va pas en faire un fromage.";
   $v2="paris/zonmai/zonmai_largue";

$m3="On va passer aux choses sérieuses. Je le fume.";
$v3="paris/zonmai/zonmai_fume"; 





    ?>
  </p>
  </p>
 
<?php 
$perso2=$hapen;
$_SESSION['flashsene']="zonmai_tele";
$_SESSION['jetailargue']=$hapen;

 ?>

 
