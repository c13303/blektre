<?php




 $action1='sex=sex-1';
$action2='karma=karma+30';
$action3='place="bureau"';
$bonus1="karma";
$malus1="sex";

include("include/panel.php"); 



 ?>
<div id="texte">
  <p>Vous êtes au bord de la crise de nerfs. Encore une minute de plus sur ce foutu dossier et vous allez perdre 10 ans de votre vie. </p>
  <p>&nbsp;</p>

  <?php 
  
$directeur=mysqli_fetch_assoc(requete('SELECT player FROM special WHERE nom="directeur";'));

if ($directeur['player']!=$nom)
{
echo $directeur['player']." passe dans votre bureau et vous prie de hâter un peu le travail, quoi, nom d'un chien.";

$hapen=$directeur['player'];
$perso2=$hapen;

$m1="Je le fume";
$v1="sp/fume";
}

$m2="Je vais me detendre aux chiottes";
$v2="paris/boulot/boulot_wc";
$m3="Je persiste sur ce dossier";
$v3="paris/boulot/boulot_dossier4";







// chouicess
  
  
  
  
    ?>

 
<?php 
$_SESSION['flashsene']='bureau';
 ?>

 














