<?php  $action3='place="chez josiane"';

 include("include/panel.php");
 

 ?>
<div id="texte">
 
 <?php if ($sex>500&&$karma>250)
 {
 	echo 'Josiane, couverte de foutre, semble furax.';
	requete('UPDATE `players` SET best=best+500 WHERE nom = "'.$nom.'" LIMIT 1;');
	requete('UPDATE `players` SET karma=karma-500 WHERE nom = "'.$nom.'" LIMIT 1;');
	requete('UPDATE `players` SET sex=sex-500 WHERE nom = "'.$nom.'" LIMIT 1;');
	$bonus1="score";
	$malus1="karma";
	$malus12="sex";
in_log($nom,"Vous avez piné Josiane","500 points");
	
	 $m1="Je lui dit que je l'aime";
$v1="paris/josiane/chezjosiane_vaisselle";
$m2="Je chiale comme une merde";
$v2="paris/josiane/chezjosiane_chiale";
$m3="Je me tire en courant";
$v3="paris/_street/streetnord";
	
	
 }
 else
 {
 	echo "Vous sortez votre bite que vous secouez piteusement sans que rien n'en sorte.
	<br/>Josiane semble avoir furieusement pitié de vous.";
	requete('UPDATE `players` SET karma=karma+25 WHERE nom = "'.$nom.'" LIMIT 1;');
	requete('UPDATE `players` SET sex=sex-200 WHERE nom = "'.$nom.'" LIMIT 1;');
	$bonus1="karma";
	$malus1="sex";
	
	  $m1="J'essaie de lui rouler une pelle";
$v1="paris/josiane/chezjosiane_pelle";
$m2="Je chiale comme une merde";
$v2="paris/josiane/chezjosiane_chiale";
$m3="Je me tire en courant";
$v3="paris/_street/streetnord";
	
 }
 
 
 
 
  

    ?>



 
<?php 
$_SESSION['flashsene']='chezjosianeopen';
$present=player_present($nom,$place);
$hapen=$present['nom'];
 ?>

 
























