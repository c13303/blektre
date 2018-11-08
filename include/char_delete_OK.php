<?php
 require("variables.php"); 
 require("include/panel.php");
 
 requete('UPDATE accounts SET char1="" WHERE char1="'.$nom.'";');
 requete('UPDATE accounts SET char2="" WHERE char2="'.$nom.'";');
 requete('UPDATE accounts SET char3="" WHERE char3="'.$nom.'";');
 
 // DEPLACEMENT CHAR
 
 $persos=requete('SELECT active,char1,char2,char3 FROM accounts WHERE nom="'.$noma.'";');
  $persos= mysqli_fetch_assoc($persos);
$char1=$persos['char1'];
$char2=$persos['char2'];
$char3=$persos['char3'];




if(!$char1&&$char2)
{
 requete('UPDATE accounts SET char1="'.$char2.'" WHERE nom="'.$noma.'";');
 requete('UPDATE accounts SET char2="" WHERE nom="'.$noma.'";');
}

 $persos=requete('SELECT active,char1,char2,char3 FROM accounts WHERE nom="'.$noma.'";');
  $persos= mysqli_fetch_assoc($persos);
$char1=$persos['char1'];
$char2=$persos['char2'];
$char3=$persos['char3'];




if(!$char2&&$char3)
{
 requete('UPDATE accounts SET char2="'.$char3.'" WHERE nom="'.$noma.'";');
 requete('UPDATE accounts SET char3="" WHERE nom="'.$noma.'";');
}


 // 
 

 
 
 
 
 
?>

<div id="texte">
Effacement termine.
<?php


  $m1="Ouin.";
$v1="check_account2";

$nom=$noma;
require('include/go.php');
?>


</div>
