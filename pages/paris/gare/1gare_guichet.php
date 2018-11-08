
<?php

 include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$dj=check_special('tube');


?>

<div id="texte">

  <p>Vous &ecirc;tes au guichet de la gare. Une blonde assez laide vous accueille chaleureusement.</p>
  <p>- Bonjour. Vous souhaitez une carte orange? Ca fait 1000 euros. Nous ne vendons plus de ticket unitaire suite au plan Vigi-pirate. </p>
  <p>Vous &ecirc;tes sacr&eacute;ment souffl&eacute;.  </p>
  <p>
    <?php


 if ($present)
 {
 echo $present." fait la queue derriere vous et montre des signes d'impatience.<br>";
 $hapen=$present;
$m2="Je fume ".$present;
$v2="sp/fume"; 
 
 }


$entree='';
$entree2='';


$billet=check_point($id,'billet');
if($billet) 
echo 'Vous avez déjà une putain de carte orange.'; 
else
{
$m1="Donnez m'en un";
$v1="paris/gare/1gare_billet";       
}


$m5="Laissez tomber";
$v5=$retour; 

$_SESSION['flashsene']='1gare_guichet';



    ?>
  </p>
 
<?php  ?>

 
