<?php

 $action1='karma = karma+10';
$action2='sex = sex+10';
$action3='';

include("include/panel.php"); 
in_log($nom, "Vous avez emballé votre patron", "gay");

 $patron=mysqli_fetch_assoc(requete('SELECT player FROM special WHERE nom="patron";'));
?>
<div id="texte">
  <p>Vous vous approchez doucement du patron <?php echo $patron['player']; ?> qui a les l&egrave;vres tremblantes, et vous l'embrassez avec passion. Il serre ses bras autour de vous et fait tournoyer sa langue dans votre bouche. Vous sentez clairement son haleine Marlboro / Tic Tac menthe vous envahir.</p>
  
  <?php 
  $m1="Je lui parle de mes idées";
$v1="paris/boulot/boulot_boss_couloir";
$m2="J'aborde le sujet de mon CDI avec tact et tendresse";
$v2="paris/boulot/CDI";
$m3="Je le fume";
$v3="paris/boulot/bureaubossfume";
  
  
    ?>

 
<?php 
$hapen=check_special('patron');
$_SESSION['flashsene']='bureaubossgaloche';
 ?>

 





















