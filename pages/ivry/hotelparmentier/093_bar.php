
<?php

$_SESSION['rue']='ivry/hotelparmentier/093_parmentier';
include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$dj=check_special('tube');


?>

<div id="texte">

  <p>Vous êtes dans le bar de l'hotel Parmentier, bar sombre et enfumé, prol&eacute;taire s'il en est. Vous vous sentez directement bien ici, et imaginez que les toilettes sont en cuivre.</p>
  <p>Au fond de la salle se trouve une sale de jeux, o&ugrave; passe en boucle le tube de <?php echo $dj; ?> en boucle. Ca pue le shit. </p>
  <p>Un t&eacute;l&eacute;phone pourri se trouve l&agrave;, &eacute;galement.</p>
  <p>
    <?php


 if ($present)
 {
 echo $present." est accoudé au bar, et picole tranquillement.";
 $hapen=$present;
$m1="Je drague ".$present;
$v1="ivry/hotelparmentier/bar_drague"; 
 
 }


$entree='';
$entree2='';

$m2="Je commande un verre";
$v2="ivry/hotelparmentier/bar_verre";    
$m3="Je vais dans l'arriere salle";
$v3="ivry/hotelparmentier/bar_poker"; 
$m4="Je vais aux chiottes";
$v4="sp/sp_chiottes"; 
$m5="Je me tire";
$v5=$_SESSION['rue']; 


$f2='bar';


    ?>
  </p>
 
<?php  ?>

 
