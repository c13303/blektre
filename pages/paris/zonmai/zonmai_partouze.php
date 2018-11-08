
<?php

 $action1='place ="zonmai"';
include("include/panel.php"); 

 $conjoint=check_maque($nom);
 $conjoint=$conjoint['player2'];
 
  $lifehapen=check_stat($conjoint);
 $lifehapen=$lifehapen['life'];


?>

<div id="texte">
  <p>- Peut &ecirc;tre que je pourrais toutes vous enfiler &agrave; la fois. Qu'est ce que vous en pensez ? </p>
  <p>&nbsp;</p>
  <p>Tout le monde vous regarde de façon perplexe. </p>
    <?php

 
 $touze=mysqli_fetch_assoc(requete('SELECT COUNT(player) as E FROM relationship WHERE player="'.$nom.'" AND relation="maqués";'));
$touze=$touze['E'];


		$fe=1;
		$gonzes=requete('SELECT player2 FROM relationship WHERE player="'.$nom.'" AND relation="maqués";');
		while ($feum=mysqli_fetch_assoc($gonzes))
		{

		$fe=$fe+1;
		
		$persal='perso'.$fe;
		$$persal=$feum['player2'];

		
		
		}





$m1="Hem";
$v1="paris/zonmai/zonmai"; 
$m2="Je me tire en courant";
$v2="paris/_street/street"; 



$_SESSION['flashsene']='zonmai_touze';

 ?>

 
