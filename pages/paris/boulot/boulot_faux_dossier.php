<?php




 $action1='';
$action3='';


include("include/panel.php"); 

 $tube=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="tube";'));

 ?>
<div id="texte">
 <?php
$what=check_point($id, 'CDI');

 if ($karma>50&&$what)
 {
 
 echo "-Patricia, le voil�, il est pr�t depuis super longtemps, mais vous n'�coutez rien, comme d'habitude. Je vais devoir en r�f�rer au patron.
<br>Patricia vous regarde comme une conne. Elle ne sait pas quoi dire.<br>Le patron passe et vous fait un clin d'oeil, vous lui
r�pondez par un sourire confiant.<br>Patricia semble avoir envie de pisser et se tire promptement.
<br><br>
Vous considerez l'avoir boul�e en bonne et due forme, cette petite dinde.";
  
  $m1="Profitant de mon avantage, je la chope fermement et je la p�te";
$v1="paris/boulot/bureau_schtoss.php";
$m2="Je chope le patron dans le couloir pour lui parler de mes id�es";
$v2="paris/boulot/boulot_boss_couloir";
$m3="Je vais a la machine a cafe";
$v3="paris/boulot/cafe";
$opt1="patocheoutred";
  requete('UPDATE `players` SET best=best+200 WHERE nom = "'.$nom.'" LIMIT 1;');
   in_log($nom, "Vous avez boul� Patricia", "Employ� de bureau 200 points");
   requete('UPDATE `players` SET karma=karma-50 WHERE nom = "'.$nom.'" LIMIT 1;');
  $bonus1="score";
  $malus1="karma";
}
else
{
 echo "-Patricia, le voil�, il est pr�t depuis super longtemps, mais vous n'�coutez rien, comme d'habitude. Je vais devoir en r�f�rer au patron.

<br>Patricia rigole et vous explique que c'est le dossier Smith, termin� depuis des lustres. Le patron passe dans le couloir et semble m�content.";
  
  $m1="Je chiale comme une merde";
$v1="paris/boulot/boulot_chiale";
$m2="Je chope le patron dans le couloir pour lui parler de mes id�es";
$v2="paris/boulot/boulot_boss_couloir";
$m3="Je vais a la machine a cafe";
$v3="paris/boulot/cafe";
$opt1="patocherit";
}


// chouicess
  
  
  
  
    ?>

 
<?php 
$perso2=check_special('patron');
$_SESSION['flashsene']='bureau';

 ?>

 














