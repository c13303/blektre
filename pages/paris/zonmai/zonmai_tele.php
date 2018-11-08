<?php  $action2='karma=karma+1';
$action3='place="zonmai"';
$action1='retour="paris/zonmai_room/z1_message"';

 include("include/panel.php");
 

 $tube=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="tube";'));


 ?>
<div id="texte">
 
  
  
  
    <?php 
 echo "Vous scotchez le dernier clip de ".$tube['player']." ,".$tube['title']." ,à la télé.";

	 $conjoint=check_maque($nom);
 $conjoint=$conjoint['player2'];
 $hapen=$conjoint;
 $perso2=$hapen;
$enfant4=mysqli_fetch_assoc(requete('SELECT nom FROM family WHERE pere="'.$nom.'" AND nom!="'.$perso2.'" AND nom!="bébé";'));
$perso4=$enfant4['nom'];
$enfant3=mysqli_fetch_assoc(requete('SELECT nom FROM family WHERE pere="'.$nom.'" AND nom!="'.$perso2.'" AND nom!="'.$perso4.'" AND nom!="bébé";'));
$perso3=$enfant3['nom'];
if($enfant4)
{
$gosses=$perso4.", votre petit dernier, scotche grave devant la télé. Fils d'abruti, pensez vous.";
}
 if($perso3)
{
$gosses="<br>Les mômes scotchent grave devant la télé. Enfants d'abrutis, pensez vous.";
}
 echo $gosses;
 
 if(!$perso2)$perso2=$present;
 
 
$m5='Que de la merde. Je me casse';
$v5="paris/_street/street";
$m2="J'ecoute mes messages";
$v2="sp/telephone";
$m4="J'appelle ma mère";
$v4="paris/zonmai_room/z1_maman";
$m3="J'appelle Josiane";
$v3="paris/zonmai_room/z1_josiane";



 ?>

 