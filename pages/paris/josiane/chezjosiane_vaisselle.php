<?php  $action3='sex=sex+30';
$bonus1='sex';
 include("include/panel.php");
 

 ?>
<div id="texte">
 
 <?php 
 $josie_lover=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="josie_lover";'));
 
 

 	echo 'Josiane finit par craquer. <br>
	- Ecoute ..'.$nom.' ... En fait, j`ai un copain. C`est .. '.$josie_lover['player'].'<br>
<br>
Vous n`arrivez pas à croire que Josiane puisse kiffer cette baltringue.';

$m1="Je chiale comme une merde";
$v1="paris/josiane/chezjosiane_chiale";
$m1="Je la traite de salope";
$v1="paris/josiane/chezjosiane_pissemort";
$m3="Je me casse, furieux";
$v3="paris/_street/streetnord";

 
 
  
    ?>



</p></form>
 
<?php 
$present=player_present($nom,$place);
$hapen=$present['nom'];
$_SESSION['flashsene']='chezjosianeopen';
 ?>

 
























