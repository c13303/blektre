<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php

 $action1='place ="Auto �cole"';$_SESSION['endroit']="a l'auto-�cole";

include("include/panel.php"); 





if($present)$hapen=$present;


?>

<div id="texte">

<p>L'auto-&eacute;cole est remplie de losers qui veulent le permis lada, mais vous faites partie des &eacute;lites que seul le permis poids lourd n&eacute;c&eacute;ssaire pour rider un 4x4 int&eacute;resse. </p>
<p>
    <?php
	
	if($hapen)
	{
	echo $hapen.' jette semble d�sorienter et pr�t � pleurer.';
	$m3='Je d�fonce '.$hapen;
	$v3="sp/fume";

	}
	
	
	
	
	
	
	
	$permis=check_point($id,'permis');
	if($permis) echo 'La monitrice vous regarde avec des yeux amoureux. Cela vous d�goute profond�mment, mais vous vous consolez en tatant le permis dans votre poche.';
	else
	{
	
	
$m1="Je veux passer l'examen";
$v1="ivry/autoecole/examen"; 
}

$m5="Je d�compe";
$v5=$_SESSION['rue']; 

$_SESSION['flashsene']='autoecole';


 ?>
</p>
  