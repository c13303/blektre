<?php
 $action1='karma = karma-12';
$action2='';
$action3='';
include("include/panel.php"); 

 ?><div id="texte"><?php
 $directeur=mysqli_fetch_assoc(requete('SELECT player FROM special WHERE nom="directeur";'));
 
 
echo "<br/>
Vous renversez le cendrier qui se trouve sur la table basse de l'entr�e de la salle de r�union afin de semer la confusion et couvrir votre fuite. Vous voil� en train de courir comme un d�rat� dans les couloirs de la corporate. Vous bousculez au passage deux trois petites pouffiasses en tailleur et ce qui ressemblait au directeur g�n�ral, monsieur ".$directeur['player'].". Vous n'avez malgr� tout pas pris le temps de v�rifier";





$m1="Je me rend dans mon bureau pour travailler comme si de rien n'�tait";
$v1="paris/boulot/bureau";
$m2="Je vais � la machine � caf�. On y fait toujours de fabuleuses rencontres ";
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

 




