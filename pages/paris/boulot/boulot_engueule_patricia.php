<?php




 $action1='';
$action3='';


include("include/panel.php"); 

 $tube=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="tube";'));
$hapen=check_special('patron');
 ?>
<div id="texte">
 <?php
$what=check_point($id, 'CDI');

 if ($karma>50&&$what)
 {
 
 echo "-Patricia, vous êtes vraiment une pouffiasse. Je tenais à vous le dire, dites vous d'un air snob.
<br>Patricia vous regarde comme une conne. Elle ne sait pas quoi dire.<br>Le patron passe et vous fait un clin d'oeil, vous lui
répondez par un sourire confiant.<br>Patricia semble avoir envie de pisser et se tire promptement.
<br><br>
Vous considerez l'avoir boulée en bonne et due forme, cette petite dinde.";
  
  $m1="Profitant de mon avantage, je la chope fermement et je la pète";
$v1="paris/boulot/bureau_schtoss";
$m2="Je chope le patron dans le couloir pour lui parler de mes idées";
$v2="paris/boulot/boulot_boss_couloir";
$m3="Je vais a la machine a cafe";
$v3="paris/boulot/cafe";
  requete('UPDATE `players` SET best=best+100 WHERE nom = "'.$nom.'" LIMIT 1;');
   
   in_log($nom, "Vous avez boulé Patricia","Employé de bureau 100 points");
   requete('UPDATE `players` SET karma=karma-100 WHERE nom = "'.$nom.'" LIMIT 1;');
  requete('UPDATE `players` SET sex=sex+10 WHERE nom = "'.$nom.'" LIMIT 1;');
  $opt1="patocheoutred";
  $bonus1="score";
  $bonus12="sex";
  $malus1="karma";
}
else
{
 echo "-Patricia, vous êtes vraiment une pouffiasse. Je tenais à vous le dire, dites vous d'un air snob.

<br>Patricia rigole. Le patron passe et lui fait un sourire. Vous vous sentez con. Elle rattrape le patron dans le couloir.";
  
  $m1="Je chiale comme une merde";
$v1="paris/boulot/boulot_chiale";
$m2="Je chope le patron dans le couloir pour lui parler de mes idées";
$v2="paris/boulot/boulot_boss_couloir";
$m3="Je vais a la machine a cafe";
$v3="paris/boulot/cafe";
$opt1="patocherit";
}


// chouicess
  
  
  
  
    ?>

 
<?php 

$_SESSION['flashsene']='bureau';

$perso2=check_special('patron');

 ?>

 














