
<?php

 $action1='place ="Train"';
$action2="retour='paris/voyage/09voyage'";
include("include/panel.php"); 

$present=player_present($nom,$place);
$hapen=$present['nom'];


?>

<div id="texte">


  <p>Le train d&eacute;marre et plein de pauvres types chialent sur le quai. En fait, c'est vous qui chialez le plus, en songeant &agrave; Josiane, et  tout vos supers potes que vous fumiez au coin de chaque de rue, comme &ccedil;a, juste pour rigoler, parce qu'on est jeunes, et qu'on est cons, comme disait James Dean. Ah, James Dean, voil&agrave; un type qui vous a toujours fait r&ecirc;ver.</p>
  <p>Vous &ecirc;tes assis p&eacute;nard dans le RER et r&ecirc;vez &agrave; toutes les aventures exitantes que ce voyage va vous faire vivre.</p>
  <p>&nbsp;</p>

    <?php
if($hapen)
{
	echo $hapen.' chiale par la fenêtre comme une madeleine. Il est pathétique.';
	$m2="Je défonce ".$hapen."";
	$v2="sp/fume";
}






$entree='';
$entree2='';



$m1="Je regarde par la fenetre";
$v1="paris/voyage/09voyage";       

$_SESSION['flashsene']='voyage';




    ?>
 

