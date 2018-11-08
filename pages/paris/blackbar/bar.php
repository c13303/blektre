
<?php

 $action1='place ="Black bar"';
$action2="retour='paris/blackbar/bar'";
include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$dj=check_special('tube');
$_SESSION['rue']='paris/_street/streetest';

?>

<div id="texte">

  <p>Vous êtes dans le Black bar, bar sombre et enfumé, communiste s'il en est. Vous vous êtes toujours bien senti ici, et ce peut &ecirc;tre gr&acirc;ce aux nombreuses nuits que vous avez pass&eacute;es dans ses toilettes. Vous saluez Kevin, le barman, qui ne vous r&eacute;pond pas.</p>
  <p>Au fond de la salle se trouve une esp&egrave;ce de dancefloor, o&ugrave; passe en boucle le tube de <?php echo $dj; ?> en boucle, deux trois pouffiasses se dandinant dessus. </p>
  <p>Un t&eacute;l&eacute;phone pourri se trouve l&agrave;, &eacute;galement.</p>
  <p>
    <?php


 if ($present)
 {
 echo $present." est accoudé au bar, et picole tranquillement.";
 $hapen=$present;
$m1="Je drague ".$present;
$v1="paris/blackbar/bar_drague"; 
 
 }


$entree='';
$entree2='';

$m2="Je commande un verre";
$v2="paris/blackbar/bar_verre";    
$m3="Je vais sur le dancefloor";
$v3="paris/blackbar/bar_dancefloor"; 
$m4="Je vais aux chiottes";
$v4="sp/sp_chiottes"; 
$m5="Je me tire";
$v5="paris/_street/streetest"; 


$_SESSION['flashsene']='bar';


    ?>
  </p>
 
<?php  ?>

 
