
<?php

 $action1='place ="Gare"';
$action2="retour='paris/gare/1gare'";
include("include/panel.php"); 
$endroit="a la gare";
$present=player_present($nom,$place);
$present=$present['nom'];

$clodo=check_special('clochard');
$_SESSION['endroit']='';
?>

<div id="texte">

  <p>Vous &ecirc;tes dans la gare, place regorgeant de mendiants et de voix off sensuelles qui vous chatouillent les oreilles. </p>
  <p>Un t&eacute;l&eacute;phone pourri se trouve l&agrave;, &eacute;galement.</p>
  <p>
    <?php
	
	
	
	if ($nom==$clodo)
	{
	echo "<br>C'est votre place préférée pour taper la manche<br>";
	$m3="Je check mon biz de mendiant";
$v3="paris/gare/1gare_bethemendiant0";
	}
else
{
echo $clodo.' a pour habitude de mendier ici, entre le distributeur de Snickers et la machine à composter.';
$m3="Je vais voir ".$clodo." qui mendie";
$v3="paris/gare/1gare_mendiant";
}




 if ($present&&$present!=$clodo)
 {
 echo $present." se ballade nonchalemment, avec sa valise ridicule. A qui va-t-il faire croire qu'il part en voyage ?";
 $hapen=$present;
$m4=$present.' est plutôt louche. Je ferais mieux de le fumer';
$v4="sp/fume"; 
 
 }


$entree='';
$entree2='';



$m1="Je vais au guichet";
$v1="paris/gare/1gare_guichet";     
 
 
$m2="Je téléphone";
$v2="sp/telephone"; 
  
$m4="Je vais sur le quai pour monter dans un RER";
$v4="paris/voyage/09quai";  
  
$m5="Je me tire";
$v5="paris/_street/streetcenter"; 





    ?>
  </p>
 
<?php 
$_SESSION['flashsene']='1gare';
$hapen=$clodo;
$perso2=$present;
 ?>

 
