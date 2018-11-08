
<?php

 $action1='place ="zonmai"';
include("include/panel.php"); 

 $conjoint=check_maque($nom);
 $hapen=$conjoint['player2'];

if(!$hapen)$hapen=$_SESSION['jetailargue'];
$_SESSION['flashsene']='zonmai_largue';

?>

<div id="texte">
<?php

$touze=mysqli_fetch_assoc(requete('SELECT COUNT(player) as E FROM relationship WHERE player="'.$nom.'" AND relation="maqués";'));
$touze=$touze['E'];

if ($touze>1)
{

$guelar=$_GET['m2'];

echo "1.Vous attrapez ".$guelar." et lui expliquez calmement qu'elle est un peu hors du coup et qu'elle ferait mieux de retourner chez sa mère, ou son ex.<br>Elle se met à chialer comme une pouffiasse et s'en va en courant.";
$m1="Ouais, j'suis comme ça, moi ..";
$v1="paris/zonmai/zonmai"; 
 

include('include/exit.php');
}



?>

  <p>- Ecoute ...C'est moi, je ne sais plus ou j'en suis. Il faut que je me retrouve. J'ai besoin d'&ecirc;tre seul tu comprends ? C'est le bordel dans ma t&ecirc;te. </p>
  <p> <b><?php echo $hapen; ?></b> se met à chialer toutes les larmes de son corps</p>
  <p>- Je ... je pensais que tu m'aimais. . Je me suis tromp&eacute;.. Tu es comme les autres.<br>
    <br>
    <b><?php echo $hapen; ?></b> vous donne une gifle. Vous restez digne et sto&iuml;que, impassible.</p>
  <p>&nbsp;</p>
  <p></p>
  <p>&nbsp;</p>
  <p> 
    <?php
	
	
	
	
	
	
	
	in_log($nom,'Vous larguez '.$hapen, 'mouchoir');
    in_log($hapen, $nom.' vous largue', 'loser');

	requete('DELETE FROM relationship WHERE player="'.$nom.'" AND player2="'.$hapen.'";');
requete('DELETE FROM relationship WHERE player="'.$hapen.'" AND player2="'.$nom.'";');


$m1="Tout, tout est fini entre nous, et je me tire";
$v1="paris/_street/street"; 





    ?>
  </p>
  </p>
 
<?php 


 ?>

 
