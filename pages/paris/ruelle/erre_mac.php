<?php  $action1='place ="rue des voyous"';
$action2='sex=500';

require("include/panel.php");

 $dealer=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="dealer";'));
 $mac=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="mac";'));
 $hapen=$_SESSION['hapen'];

 $pute=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="prostituee";'));



 $verif='SELECT * FROM players ORDER BY best DESC;';
  $req=requete($verif);



 ?>
<div id="texte">
  <p>Vous &ecirc;tes le nouveau mac de la ruelle des voyous.<br />
    <br />




<?php

// be the mac
requete('UPDATE `special` SET player="'.$nom.'" WHERE nom = "mac" LIMIT 1;');

// si le mac est pute, alors pute = blektre
if ($pute['player']==$nom)
{
requete('UPDATE `special` SET player="Blektre" WHERE nom = "prostituee" LIMIT 1;');
}

$pute=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="prostituee";'));



$m1="Je vais racketter ma pute";
$v1="paris/ruelle/erre_mac2";
$m3="Easy.";
$v3="paris/ruelle/erre";




    ?>


  </p>
 
<?php
$perso4=$pute['player'];
$perso3=$nom;

$_SESSION['flashsene']='erre_mac';
 ?>

 
























