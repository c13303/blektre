
<?php

 $action1='karma=karma+500';
$action2='best=best+100';
$action3='';
include("include/panel.php"); 
$bonus1="score";
$bonus2='karma';
 $patron=mysqli_fetch_assoc(requete('SELECT player FROM special WHERE nom="patron";'));
 ?>
<div id="texte">

Vous chopez le patron <?php echo $patron['player']; ?> par sa cravate, et alors qu'il essaye de fuir vous le fumez d'un crochet du gauche bien senti dans sa machoire Gilette, ce provoque en vous une profonde sensation de bien-être. Vous le tenez par le costard et il se met à hurler comme une gonzesse, et d'autres employés arrivent, visiblement dans l'intention de vous maitriser.

<?php

in_log($nom, "Vous avez fumé votre patron, monsieur ".$patron['player'], "100 points");
in_log($nom, "Vous êtes viré", "Loser");
in_point($id,"vire");
$dirlo=check_special('directeur');
if($nom==$dirlo)
{
	no_point($id,'bedirecteur');
	$stagiaire=check_special('stagiaire');
	set_special($stagiaire,'directeur');
	in_log($stagiaire,"Vous passez de stagiaire à directeur","chance");
}
  
  $m1="Je me calme et j'essaye de tout arranger";
$v1="paris/boulot/bureau_schtoss";
$m2="Je les fume tous";
$v2="paris/boulot/bureau_schtoss";
$m3="Je me tire en courant jusqu'à ma voiture";
$v3="paris/_street/street";
  
    ?>

     
<?php 
$perso2=check_special('patron');



if($dirlo!=$nom)
{
$perso3=$dirlo;
}

$present=player_present($nom,$place);
$present=$present['nom'];
$hapen=$present;
$_SESSION['flashsene']='bureau_schtoss';
 ?>

 




