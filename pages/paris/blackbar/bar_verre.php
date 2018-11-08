
<?php

 $action1='place ="Black bar"';

include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$tube=check_special('tube');



?>

<div id="texte">

  <p>Vous prenez une biere et sirotez en &eacute;coutant  <b><?php echo $tube; ?></b> qui passe en boucle au fond de la salle. </p>
  <p>Vous racontez des banalit&eacute;s &agrave; Kevin qui vous ignore proprement.</p>
  <p>&nbsp;</p>

  <br>

    <?php

	if ($money<5)
	{
	echo "A ce propos, vous n'avez pas les moyens de payer les verres et le barman vous en colle une bonne dans la gueule.";
	requete('UPDATE `players` SET money=0 WHERE nom = "'.$nom.'" LIMIT 1;');
	requete('UPDATE `players` SET life=life-10 WHERE nom = "'.$nom.'" LIMIT 1;');
	$malus1='life';
	in_log($nom,'Vous prenez une rouste au Black bar, faute de pouvoir payer vos consos','crevard');
	
	
	$m1="Je ramasse mes dents et je me tire";
$v1="paris/_street/street";
$_SESSION['flashsene']='43BORDEL';
 
include('include/exit.php');
	
	}

else
{
requete('UPDATE `players` SET frakass=frakass+10 WHERE nom = "'.$nom.'" LIMIT 1;');

requete('UPDATE `players` SET money=money-5 WHERE nom = "'.$nom.'" LIMIT 1;');

requete('UPDATE `players` SET sex=sex+3 WHERE nom = "'.$nom.'" LIMIT 1;');
$bonus1="frakass";
$malus1="money";


	$m1="Je me paye un autre verre";
$v1="paris/blackbar/bar_verre2";

	}
	
	
		 if ($present)
 {
 echo $present." s'assoit au bar, et demande une vodka tonic.";
 $hapen=$present;
$m2="Je drague ".$present;
$v2="paris/blackbar/bar_drague"; 
 
 }
 
 
		$m3="Je vais sur le dancefloor";
$v3="paris/blackbar/bar_dancefloor"; 
$m4="J'achète une bouteille de Jack";
$v4="paris/blackbar/bar_jack"; 
		
		$m5="Je me tire";
$v5=$_SESSION['rue']; 
	 
?>
  </p>
 
<?php
$_SESSION['flashsene']="bar_drague"; 

 ?>

 
