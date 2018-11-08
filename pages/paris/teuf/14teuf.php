
<?php


include("include/panel.php"); 
$endroit="au bois du muguet";
$q=check_bag($id,"drogue");



?>

<div id="texte">

  <p>Vous commencez à secouer les bras et les jambes à la manière d'un poulet. Vous vous sentez particulièrement ridicule et vous comprenez alors pourquoi tout le monde se gave de drogue autour de vous. </p>

  <p>
    <?php
$r=rand(1,7); 
$r2=rand(1,50);
	
	if($r==4&&$q>0)
	{
	echo "Vous réalisez que dans la confusion de la teuf, vous avez perdu un paquet !</p><p>";
	in_log($nom,'Vous perdez un paquet de drogue','pauvre tache');
	no_bag($id,'drogue','100');
	}
	
	if($r==2&&$q>0)
	{
	echo "Des flics arrivent et attendent au bord de la teuf.</p><p>";

	}
	
	if($r2==8)
	{
	echo "<p>Coup de bol, vous trouvez un paquet par terre !";
	in_log($nom,'Vous trouvez un paquet de drogue par terre','chanceux');
	in_bag($id, 'drogue','100');
	}
	
	
	
 if ($present&&$present!=$traveler)
 {
 echo $present." est complètement défoncé, et danse comme un vrai connard. Cela vous donne envie de mourir.<br>";
 $hapen=$present;
$m4='Je le fume';
$v4="sp/fume"; 
 
 }
 
 
   
 
$m5="Je continue de zoner dans la teuf";
$v5="paris/teuf/14bois"; 
$perso2=$hapen;
$_SESSION['flashsene']='14teuf';



    ?>
  </p>
 


 
