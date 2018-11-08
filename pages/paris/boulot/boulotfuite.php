<?php
 $action1='karma = karma-12';
$action2='';
$action3='';
include("include/panel.php"); 

 ?><div id="texte"><?php
 $directeur=mysqli_fetch_assoc(requete('SELECT player FROM special WHERE nom="directeur";'));
 
 
echo "<br/>
Vous renversez le cendrier qui se trouve sur la table basse de l'entrée de la salle de réunion afin de semer la confusion et couvrir votre fuite. Vous voilà en train de courir comme un dératé dans les couloirs de la corporate. Vous bousculez au passage deux trois petites pouffiasses en tailleur et ce qui ressemblait au directeur général, monsieur ".$directeur['player'].". Vous n'avez malgré tout pas pris le temps de vérifier";





$m1="Je me rend dans mon bureau pour travailler comme si de rien n'était";
$v1="paris/boulot/bureau";
$m2="Je vais à la machine à café. On y fait toujours de fabuleuses rencontres ";
$v2="paris/boulot/cafe";
$m3="Je me casse de cet endroit de merde ";
$v3="paris/_street/street";

  ?>

  
   
<?php 
$perso2=check_special('patron');
$present=player_present($nom,$place);
$hapen=$present['nom'];
$_SESSION['flashsene']='runninglow';
 ?>

 




