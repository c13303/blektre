<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php
 $action1='best = best+500';

include("include/panel.php"); 




$concess=check_special('concess');	$perso2=$concess; if($present)$hapen=$present;
no_point($id,'piston4x4');


?>

<div id="texte">

<p>Le concessionnaire semble un peu d&eacute;go&ucirc;t&eacute;, mais apr&egrave;s un coup de fil au directeur, voil&agrave; qu'il vous laisse les cl&eacute;s du bureau, avant de s'en aller en pleurant.</p>

<p>
    <?php
 set_special($nom,'concess');
  $vendeuse=check_special($vendeuse);
 $voyante=check_special($voyante);
 in_log($nom,'Vous devenez concessionnaire de 4x4','500 pts');
 in_log($concess,'Vous redevenez vendeuse à Parly II','loser');
 in_log($vendeuse,'Vous redevenez voyante à Parly II','loser');
 in_log($voyante,'Vous redevenez stagiaire','loser');

 set_special($concess,'vendeuse');
 set_special($vendeuse,'voyante');
 


	
$m5="Groovy ";
$v5='ivry/concess/betheconcess'; 

$_SESSION['flashsene']='concess';


 ?>
</p>
  