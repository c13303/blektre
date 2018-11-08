
<?php

 $action1='place ="zonmai"';
include("include/panel.php"); 

 $conjoint=check_maque($nom);
 $conjoint=$conjoint['player2'];
 
  $lifehapen=check_stat($conjoint);
 $lifehapen=$lifehapen['life']; 
 

?>

<div id="texte">
<?php

$touze=mysqli_fetch_assoc(requete('SELECT COUNT(player) as E FROM relationship WHERE player="'.$nom.'" AND relation="maqués";'));
$touze=$touze['E'];

if ($touze>1)
{

		$f=1;
		$gonzes=requete('SELECT player2 FROM relationship WHERE player="'.$nom.'" AND relation="maqués";');
		while ($feum=mysqli_fetch_assoc($gonzes))
		{
		$f=$f+1;
		if ($f==3)
		{
		$guelar=$feum['player2'];
		}}
}		


echo "Vous attrapez ".$guelar." et lui expliquez calmement qu'elle est un peu hors du coup et qu'elle ferait mieux de retourner chez sa mère, ou son ex.<br>Elle se met à chialer comme une pouffiasse et s'en va en courant.";

$hapen=$guelar;
	in_log($nom,'Vous larguez '.$hapen, 'mouchoir');
    in_log($hapen, $nom.' vous largue', 'loser');

	requete('DELETE FROM relationship WHERE player="'.$nom.'" AND player2="'.$hapen.'";');
requete('DELETE FROM relationship WHERE player="'.$hapen.'" AND player2="'.$nom.'";');

$m1="Ouais, j'suis comme ça, moi ..";
$v1="paris/zonmai/zonmai"; 
 
 ?>
  </p>
  </p>
 
<?php 
$_SESSION['flashsene']='zonmai_largue';

 ?>

 
