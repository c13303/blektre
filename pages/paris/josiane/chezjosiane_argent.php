<?php  $action3='place="chez josiane"';

 include("include/panel.php");
 

 ?>
<div id="texte">
 
 <?php if ($money>275)
 {
 	echo 'Josiane semble éberluée en vous voyant tendre les billets.';
	requete('UPDATE `players` SET money=money-275 WHERE nom = "'.$nom.'" LIMIT 1;');
	requete('UPDATE `players` SET best=best+500 WHERE nom = "'.$nom.'" LIMIT 1;');
	requete('UPDATE `players` SET karma=karma+100 WHERE nom = "'.$nom.'" LIMIT 1;');
	requete('UPDATE `players` SET sex=sex+500 WHERE nom = "'.$nom.'" LIMIT 1;');
	$malus1="money";
	$bonus1="karma";
	$bonus12="sex";
	in_log($nom,"Vous avez rendu à Josiane son argent","500 points");
	in_point($id,"fricjosiane");
	
	$m1="Je tente une pelle ";
$v1="paris/josiane/chezjosiane_tente";
$m2="Je tente une ejaculation faciale de courtoisie";
$v2="paris/josiane/chezjosiane_ejac";

 }
 else
 {
 	echo "-Alors ? Ou sont les ronds? demande Josiane.
	<br/>Etrangement, vous n'avez pas une tune.
<br/>
<br/>-C'est pas facile en ce moment .. Si j'avais un peu plus le moral, je trouverais plus facilement de l'argent ...
	";
	requete('UPDATE `players` SET karma=karma-200 WHERE nom = "'.$nom.'" LIMIT 1;');
	$malus1="karma";
	$m1="Je tente une pelle ";
$v1="paris/josiane/chezjosiane_pelle";
$m2="Je tente une ejaculation faciale de courtoisie";
$v2="paris/josiane/chezjosiane_ejac";
 }
 
 
  $dj=check_special('tube'); 
 if ($nom==$dj)
 {
  $m3='Je frime parce que je suis devenu DJ';
  $v3='paris/josiane/chezjosiane_tente';
 }

$m4="Je prends un air t&eacute;n&eacute;breux et je me casse";
$v4="paris/_street/streetnord";
  
  
    ?>



 
<?php 
$_SESSION['flashsene']='chezjosianeopen';
$present=player_present($nom,$place);
$hapen=$present['nom'];
 ?>

 
























