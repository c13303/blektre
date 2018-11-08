
<?php

 $action1='place ="rue des noyés"';
$action2='retour="paris/parisiens/parisien_violence"';
$action3='life=life-10';
include("include/panel.php"); 
$malus1="life";
?>

<div id="texte">

  <p>Vous fumez le gros lard qui vous barre la route &agrave; l'aide d'un coup de pied rotatif comme vous savez bien les faire. Certains s'enfuient, d'autres vous hurlent d'arr&ecirc;ter. &quot;J'appelle la police!!&quot; crie une femme que vous calmez d'une manchette dans la nuque. Vous recevez deux ou trois coups de sac &agrave; main mais rien qui ne vous arr&ecirc;te. </p>
<?php
if($present)
echo $present."  qui se trouve là, vous aligne quelques gnons dans la gueule.<br/>";

  $m1="Je prends ma caisse et je me tire tel le chevalier noir sur son destrier";
$v1="paris/_street/street";
$m2="Je me calme et impose mon franc parl&eacute; diplomatique";
$v2="paris/parisiens/parisien_dissident";
$m3="Je les fume tous";
$v3="paris/parisiens/parisien_violence2"; 
  
    ?>
 
  

 
<?php 
if(!$hapen)
{
$hapen='Blektre';
}
 ?>

 
