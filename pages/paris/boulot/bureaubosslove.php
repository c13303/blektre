 <?php
 $patron=mysqli_fetch_assoc(requete('SELECT player FROM special WHERE nom="patron";'));
 echo "<br/> Le patron monsieur ".$patron['player']." entre, en toquant doucement. Il s'assoit sur votre bureau.
  <br/>
  <br/>- ".$nom.", comment �a va ? Ca m'a �norm�ment �mu ce que tu m'as dit  tout � l'heure...
  <br/>
  <br/>Il commence � poser sa main sur la votre.";
  
  
  
  
  
  $_SESSION['flashsene']='bureauboss';
 
  $perso2=check_special('patron');
  
    $m1="Je le repousse poliment et aborde le sujet de mon CDI";
$v1="paris/boulot/bureaubossrepousse";
$m2="Je lui roule une galoche";
$v2="paris/boulot/bureaubossgaloche";
$m3="Je le fume";
$v3="paris/boulot/bureaubossfume";

?>