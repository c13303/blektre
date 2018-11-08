
<?php

 $action1='place ="hopital"';
$action2='retour="paris/hopital/6hopital"';
include("include/panel.php"); 

	$docteur=check_special('docteur');
	$hapen=$docteur;
	
?>

<div id="texte">

  <p>- Tr&egrave;&egrave;&egrave;&egrave;s bien ! dit il en se frottant les mains. Alors voyons voir .. Ch&egrave;que ? Carte Bleue ? Aaah, liquide ! Encore mieux ! </p>
  <p>Apr&egrave;s avoir encaiss&eacute; vos billets, le docteur vous donne trois mis&eacute;rables pillules dans un petit gobelet de plastique. </p>
  <p>- Voil&agrave;, vous ne devriez plus trop sentir les effets de votre DAS.... de votre maladie avec ceci. Merci et &agrave; bient&ocirc;t ! </p>
<p>
      <?php
update_stat($nom,'money','-2000');
no_point($id,'sida');
in_point($id,'chimio');
in_log($nom,'Vous commencez une chimio','crevard');
set_stat($nom,'life','100');
	
	
	
	
	
	
	$m5='Je me tire';
	$v5='paris/_street/streetnord';
	
	
	
	
    ?><?php 
$perso2=check_special('docteur');
$_SESSION['flashsene']='6docteur';

 ?>
</p>
    