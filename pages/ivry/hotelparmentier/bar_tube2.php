
<?php

 
$action2='retour ="ivry/hotelparmentier/bar"';
$action3='karma =karma+250';
include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$dj=check_special('tube');
$entree=$_GET['entree'];$entree=clean($entree);
$drogue=check_rank('dealer');
$drogue=$drogue['title'];

?>

<div id="texte">

  <p>Vous chantez comme une grosse merde et <?php echo $dj; ?> remue la t&ecirc;te en souriant. <br>
  - Ouais, c'est bon &ccedil;a baby, tout en se fumant un gros cone de votre drogue.</p>
  <p>En suite, il appuie sur quelques boutons sur une console, probablement des outils Steinberg, et voila que votre voix sonne comme Britney Houston lors de sa p&eacute;riode p&eacute;dophile, le genre de truc qui cartonne grave sur MTV. <br>
  - C'est bon &ccedil;a Baby !! </p>
  <p>C'est alors qu'un gros porc en chemise &agrave; fleur arrive et attrape le disque fraichement press&eacute;. <br>
  - Ouep. D'ailleurs &ccedil;a va &ecirc;tre notre nouveau dj, et son tube va passer dans toutes les radios, dit il en riant grassement.</p>
  <p><?php echo $dj; ?> est tellement d&eacute;fonc&eacute; qu'il s'&eacute;croule par terre et ne bouge plus.</p>
  <p>- Evidemment tu ne touchera pas un rond. Mais ca va t'assurer un succ&egrave;s fou avec les gonzesses mon pote.  </p>
  <p>    
    <?php
	in_log($dj,"Votre tube est devenu has been", $entree);
	update_stat($nom,'sex','+100');
	set_special($nom,'tube');
	requete('UPDATE `special` SET title="'.$entree.'" WHERE nom = "tube" LIMIT 1;');
	in_log($nom,"Vous sortez un tube", $entree);

$entree="";


$m2="Trop cool";
$v2="ivry/hotelparmentier/bar";    





    ?>
  </p>
 
<?php 
$hapen=$dj;
 ?>

 
