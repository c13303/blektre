
<?php

 $action1='life = life-10';
$action2='retour="paris/ruelle/erre"';
$action3='sex = sex+10';
include("include/panel.php"); 

 $dealer=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="dealer";'));
 $mac=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="mac";'));
  
 
 $dealerlife=mysqli_fetch_assoc(requete('SELECT life FROM players WHERE nom="'.$dealer['player'].'";'));
 $dealerlife=$dealerlife['life'];
 $maclife=mysqli_fetch_assoc(requete('SELECT life FROM players WHERE nom="'.$mac['player'].'";'));
 $maclife=$maclife['life'];

 $pute=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="prostituee";'));
  $putelife=mysqli_fetch_assoc(requete('SELECT life FROM players WHERE nom="'.$pute['player'].'";'));
 $putelife=$putelife['life'];
 

 

?>

<div id="texte">

  <p>- Alors tu veux me lacher comme ça hein ? Petite salope, dit <?php echo $mac['player']; ?> en vous donnant une torgnole.  
  <p>Apr&egrave;s vous avoir bastonn&eacute; pendant un bon quart d'heure, il vous d&eacute;clare qu'il ne vous fichera jamais la paix, que vous &ecirc;tes &agrave; lui, et tout le baratin. <br />
    <br />
    <?php
   $entree='';
$entree2='';
$hapen=$mac['player'];
$perso3=$mac['player'];
$m3="Je le fume";
$v3="sp/fume"; 
$m4="Je me tire en chialant";
$v4="paris/ruelle/erre"; 






$_SESSION['flashsene']='erre_nopute';

 ?>

 
