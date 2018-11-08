
<?php

 $action1='place ="Train pour ivry"';
$action2="retour='paris/voyage/09ivrytrain'";
include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$shaolin=check_special('Shaolin');

?>

<div id="texte">


  <p>Vous saisissez un extincteur pour p&eacute;ter la vitre mais celui ci rebondit et vous revient dans la gueule.</p>
  <p>Heureusement, un moine Shaolin nomm&eacute; <?php echo $shaolin; ?> passe par l&agrave; et d&eacute;truit la vitre d'un coup de boule rotatif. Il vous attrape et vous balance par la fen&ecirc;tre. </p>
  <p>Au passage, les d&eacute;bris vous &eacute;corchent et vous tombez dans la neige &agrave; plus de 75 km, vous brisant ainsi la jambe. Vous avez le temps d'apercevoir une derniere fois votre sauveur, le moine Shaolin qui vous dit au revoir en souriant. Une larme d'&eacute;motion coule sur votre joue. </p>
  <p> 
    <?php


$entree='';
$entree2='';
in_log($nom,"Vous vous faites balancer du train par ".$Shaolin, "");
update_stat($nom,'life','-15');


$m1="Je rampe jusqu'à Paris";
$v1="paris/zonmai/zonmai";       






    ?>
  </p>
  </p>
 
<?php  ?>

 
