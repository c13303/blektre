
<?php


include("include/panel.php"); 
$endroit="au bois du muguet";


$q=check_bag($id,"drogue");

?>

<div id="texte">

  <p>Vous retournez &agrave; votre bagnole. </p>

  <p>
    <?php
$r=rand(1,4); 
	
	
	if($r==4&&$q>0)
	{
	echo "Vous réalisez que dans la confusion de la teuf, vous avez perdu toute votre came !</p><p>";
	no_bag($id,'drogue','1000');
	}
	
	
 if ($present&&$present!=$traveler)
 {
 echo $present." est complètement défoncé, contre votre voiture.<br>";
 $hapen=$present;
$m4='Je le fume';
$v4="sp/fume"; 
 
 }
 
 
   
 
$m5="Je me tire";
$v5="paris/_street/streetouest"; 

$_SESSION['flashsene']='voiture';

    ?>
  </p>
 


 
