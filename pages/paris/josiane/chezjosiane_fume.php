<?php  $action3='place="chez josiane"';

 include("include/panel.php");
 

 ?>
<div id="texte">
  <p>Vous adressez un prompt coup de boule &agrave; Josiane qui s'&eacute;tale de tout son long dans le hall d'entr&eacute;e. Elle saigne du nez et vous hurle comme une vache de d&eacute;gager. Vous lui administrez quelques coups de pieds afin d'&eacute;viter d'alerter le voisinage. </p>
  <p>Au bout d'un certain temps, elle se met &agrave; ne plus bouger.</p>
  <p>Une certaine tristesse vous envahit, et celle ci semble venir des couilles. 
    <?php 
 

	requete('UPDATE `players` SET best=best+2 WHERE nom = "'.$nom.'" LIMIT 1;');
	requete('UPDATE `players` SET karma=karma-500 WHERE nom = "'.$nom.'" LIMIT 1;');
	$malus1="karma";
	in_log($nom, "Vous avez fumé Josiane","2 points");
	in_point($id,"fumejosiane");
	
 
 
 
  
  $m1="Je m'enfuis";
$v1="paris/_street/streetnord";
$m2="Je fouille la baraque";
$v2="paris/josiane/chezjosiane_pissemort";
$m3="Je pisse sur son corps inanim&eacute; puis je le viole";
$v3="paris/josiane/chezjosiane_pissemort";
  $_SESSION['flashsene']='chezjosiane_fume';
    ?>


 
<?php  ?>

 
























