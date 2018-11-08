
<?php

 $action1='karma=karma-50';
$action2='';
$action3='';
include("include/panel.php"); 

$malus1="karma";
?>

<div id="texte">

  <p>Votre attitude est telle que le patron vous informe que votre contrat se terminant aujourd'hui, vous feriez aussi bien de partir maintenant. 
</p>
  <p>- Et mon CDI alors? chialez vous.<br>
    <br>
    - Pauvre connard. Allez, d&eacute;gage. </p>
  <p>    
    <?php
if($hapen)
{
echo $hapen.' rit à gorge déployée.';
}

$malus1="karma";

in_log($nom,'Vous êtes viré','Loser');
in_point($id,'vire');
if($nom==check_special('directeur'))
{
requete('UPDATE `special` SET player="'.$stagiaire.'" WHERE nom = "directeur" LIMIT 1;');
no_point($id,'bedirecteur');

$stagiaire=check_special('stagiaire');
set_special($stagiaire, 'directeur');
in_point(get_id($stagiaire),'bedirecteur');


}



     $m1="Je fume le patron";
$v1="paris/boulot/bureaubossfume";
$m2="Je les fume tous";
$v2="paris/boulot/bureau_schtoss";
$m3="Je me tire en courant jusqu'à ma voiture <br> et je démarre avec un <em>burn</em> bien senti ";
$v3="paris/_street/street";
  
    ?>

 
<?php 
$perso2=check_special('patron');

$_SESSION['flashsene']='boulot2';

 ?>

 






