
<?php

 $action1='place ="Gare"';
$action2="retour='paris/gare/1gare'";
include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];

?>

<div id="texte">


    <?php


 if ($money>1000)
 {
 echo "Vous tendez les billets � la guicheti�re au physique peu avantageux qui vous donne votre carte orange.<br>-Bon voyage monsieur.";

$m1="Je monte dans le train";
$v1="paris/voyage/09get_billet"; 
$m2="Pas tout de suite";
$v2='paris/gare/1gare';
  
 }
else
{
echo "Vous faites semblant d'avoir oubli� votre portefeuille pour cacher votre manque d'argent et la guicheti�re laide vous adresse un sourire navr�.";
$entree='';
$entree2='';



$m1="J'�clate la vitre du guichet et je la fume";
$v1="paris/gare/1gare_bordel";       
$m5="Tant pis.";
$v5="paris/gare/1gare"; 
}



    ?>

 
