<?php 
 include("include/panel.php"); 



 
 ?>
<div id="texte">
  <p>Vous passez la journ&eacute;e &agrave; piquer le cul des patients et &agrave; mettre la main &agrave; ceux des infirmi&egrave;re. Bref, une superbe place pour le petit obs&eacute;d&eacute; que vous &ecirc;tes.</p>
  <p>    <?php
	
	
	
	set_special($nom,'docteur');
	in_log($nom, 'Vous devenez docteur','métier d`avenir');
	$m2="Chouette";
	$v2="paris/hopital/6hopital";


	
$perso2=$nom;
$_SESSION['flashsene']='6docteur';

    ?>
  

  
</p>

 
























