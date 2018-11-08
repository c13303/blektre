
<?php

 // no need retour

require("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$hapen=$_SESSION['hapen'];



?>

<div id="texte">

  <p>- 50 euros steuplé, grogne Michel.</p>
  <p>&nbsp;</p>

  <br>

    <?php
	 if ($present)
 {
 echo $present." étouffe un rire débile.";
 $hapen=$present;
$m2="Je drague ".$present;
$v2="ivry/hotelparmentier/bar_drague"; 
 
 }
	if ($money<50)
	{
	echo "Vous n'avez pas les moyens.";
	}
	else
	{
	update_stat($nom,"money","-50");
	in_point($id,'Ricard');
	in_log($nom,'Vous achetez une bouteille de Ricard','');
	echo "Vous empochez la bouteille de Jack et lachez 50 euros à Vlad' qui ne bronche pas.";
	
	}
	


$m1="Je me paye un autre verre";
$v1="ivry/hotelparmentier/bar_verre";


		
$m5="Je me tire";
$v5=$_SESSION['rue']; 
	 
?>
  </p>
 

 
