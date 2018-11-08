
<?php

 $action1='place ="Black bar"';
include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$dj=check_special('tube');

$_SESSION['flashsene']="bar_dancefloor";
?>

<div id="texte">
<?php
if ($nom==$dj)
{
 echo "Vous allez au platines passer votre tube plusieurs fois histoire de bien peter la tête des gens<br>";
 
}

else
{
echo "
  <p>Vous shakez votre boule sur le tube de ".$dj.", qui d'ailleurs, se trouve aux platines </p>
  <p>
  ";
  $m2="Je vais voir le dj";
$v2="paris/blackbar/bar_dj"; 
$m4="Je me la donne veugra sur le plancher";
$v4='paris/blackbar/dance';
  }





 if ($present)
 {
 echo $present." danse comme un gros con, il est vraiment ridicule, mais toutefois son cul est assez sexy.";
 $hapen=$present;
$m1="Je drague ".$present;
$v1="paris/blackbar/bar_drague"; 
 
 }



$m3="Je retourne boire un verre";
$v3="paris/blackbar/bar_verre"; 

   
$m5="Je me tire";
$v5=$_SESSION['rue']; 





    ?>
  </p>
 
<?php 

$perso2=$hapen;
$perso3=$dj;
if($nom==$dj)
{
$noname='bite en fleur extra ball bonus';
}
 $tube=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="tube";'));
$opt1=$tube['title'];


 ?>

 
