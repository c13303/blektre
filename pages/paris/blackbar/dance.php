
<?php


include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$dj=check_special('tube');

$_SESSION['flashsene']="bar_dancefloor";
?>

<div id="texte">



<?php

$lastdance=get_time_point($id,'lastdance');
$passdance=$time-$lastdance;
if($passdance>30)
{
echo '<p>Vous vous d&eacute;hanchez ridiculement sur le rythmique de la musique tout en suant: vous sentez votre sex-appeal monter en fl&egrave;che. </p>';

in_point($id,'lastdance');
in_log($nom,'Vous vous la donnez sur le dancefloor du black bar','+sex 150');
update_stat($nom,'sex','+150');

}
else
{
echo '<p>Vous êtes encore crevé d`avoir trop dansé et la simple idée de devoir remuer votre petit corps malingre vous déprime. Revenez plus tard. </p>';

}



 if ($present)
 {
 echo $present." tente une coupole mais se mange la gueule sur le lino";
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

 
