
<?php

 

require("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$hapen=$_SESSION['hapen'];

$hapensex=check_stat($hapen);
$hapensex=$hapensex['sex'];

?>

<div id="texte">

  <p>Vous payez un autre verre &agrave; <b><?php echo $hapen; ?></b> et vous enfilez le votre d'une traite. </p>
  <p>Vous racontez des conneries, qui sont apparemment tol&eacute;r&eacute;es par votre interlocuteur par le fait qu'elle n'&eacute;coute absolument pas. </p>
  <p>&nbsp;</p>

  <br>

    <?php
	
	if ($money<20)
	{
	echo "A ce propos, vous n'avez pas les moyens de payer les verres et le barman vous en colle une bonne dans la gueule.";
	requete('UPDATE `players` SET money=0 WHERE nom = "'.$nom.'" LIMIT 1;');
	requete('UPDATE `players` SET life=life-15 WHERE nom = "'.$nom.'" LIMIT 1;');
	in_log($nom,'Vous prenez une rouste a l`hotel Parmentier, faute de pouvoir payer vos consos','crevard');
	
	
	$m1="Je ramasse mes dents et je me tire";
$v1=$_SESSION['rue'];
	$_SESSION['flashsene']='ivryvire';
	
	}

else
{
requete('UPDATE `players` SET frakass=frakass+10 WHERE nom = "'.$nom.'" LIMIT 1;');
requete('UPDATE `players` SET frakass=frakass+1 WHERE nom = "'.$hapen.'" LIMIT 1;');
requete('UPDATE `players` SET money=money-20 WHERE nom = "'.$nom.'" LIMIT 1;');
in_log($nom,'Vous payez un verre à '.$hapen.'',"dragueur");
in_log($hapen, $nom.' vous paye un verre',"dragué");
$bonus1="frakass";
$malus1="money";
$bonus2="frakass";
	$m1="Je lui paye un autre verre";
$v1="ivry/hotelparmentier/bar_drague_foireuse";
$m2="Je lui raconte un sketch de Gad Elmaleh";
$v2="ivry/hotelparmentier/bar_drague_gad";
	$m3="Je me tire";
$v3=$_SESSION['rue']; 
	}

   







    ?>
  </p>
 
<?php 
$f2="ivry/hotelparmentier/bar_drague";
 ?>

 
