
<?php

 

include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$tube=check_special('tube');



?>

<div id="texte">

  <p>Vous songez à vous payer une ticket de Loto pour passer un peu le temps quand vous réalisez à quel point vous ressemblez à ces vieux que vous voyez le matin, dès 8h, accoudés au bar en train de siroter un verre de pinard.</p>
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
$v1="street";

 
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
$v1="ivry/hotelparmentier/bar_verre2";

	}
	
	
		 if ($present)
 {
 echo $present." s'assoit au bar, et demande une Ricard tonic.";
 $hapen=$present;
$m2="Je drague ".$present;
$v2="ivry/hotelparmentier/bar_drague"; 
 
 }
 
 

$m4="Je bois un autre verre";
$v4="ivry/hotelparmentier/bar_verre"; 
		
		$m5="Je me tire";
$v5=$_SESSION['rue']; 
	 
?>
  </p>
 
<?php
$f2="ivry/hotelparmentier/bar_drague"; 

 ?>

 
