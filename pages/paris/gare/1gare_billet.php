
<?php

 include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];

?>

<div id="texte">


    <?php


 if ($money>1000)
 {
 echo "Vous tendez les billets � la guicheti�re au physique peu avantageux qui vous prends en photo, avant de vous donner votre carte orange personnalis�e.<br><br>-Bon voyage monsieur.";
update_stat($nom,'money','-1000');
in_point($id,'billet');
$m1="Merci.";
$v1=$retour; 
 
 
 }
else
{
echo "Vous faites semblant d'avoir oubli� votre portefeuille pour cacher votre manque d'argent et la guicheti�re laide vous adresse un sourire navr�.";

$entree='';
$entree2='';



    
$m5="Tant pis.";
$v5=$retour; 

}


    ?>

 
