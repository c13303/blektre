
<?php

 $action1='place ="hopital"';
$action2='retour="paris/hopital/6hopital"';
include("include/panel.php"); 
$hapen=check_special('docteur');

?>

<div id="texte">

  <p>- Bon. C'est illégal, mais j'accepte de le faire .. moyennant tout votre argent. De toute manière, vous n'en aurez que foutre de l'autre côté, n'est ce pas ? </p>
  <p>Le docteur <b><?php echo $hapen; ?></b> se met &agrave; rire aux &eacute;clats.<br>
  </p>
  <p>- Excusez moi .. hum. A part &ccedil;a, je vous encourage vivement &agrave; l'euthanasie: c'est le meilleur rem&egrave;de &agrave; tous les probl&egrave;mes, croyez moi. Aucun patient n'a eu besoin de revenir se faire soigner apr&egrave;s &ccedil;a. </p>
  <p>&nbsp;</p>
  <?php

	

	$m2='Euthanasiez moi.';
	$v2='paris/hopital/6hopital_suicide_OK';
	$m4='Finalement je préfère lui poncer le colon';
	$v4='paris/hopital/6fume_docteur';

	$m5='Je me tire en courant';
	$v5='paris/_street/streetnord';
	
	
	
	
	
	
	
	
	
	






$perso2=check_special('docteur');
$_SESSION['flashsene']='6docteur';


 ?>

 
