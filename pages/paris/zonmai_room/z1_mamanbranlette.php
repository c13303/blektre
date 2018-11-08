<?php

 $action1='karma = karma+50';
$bonus1="karma";
$action3='';
include("include/panel.php"); 

?><div id="texte"><?php

$what=check_point($id,'fumemaman');
if ($what)
{
 echo "Vous entendez votre mère qui hurle à l'autre bout du fil. A en croire sa prononciation des R, vous en déduisez que vous avez dû lui péter toutes les dents la derniere fois que vous l'avez vue.
<br>-Moi aussi je t'aime maman.";
 
 $v1="paris/zonmai_room/z1_raccroche";
 $m1="Je raccroche";
$_SESSION['flashsene']='message';
 include('include/exit.php');
 }

echo "<br/>
<br/>- HAnllô .. ?
<br/>- ".$nom.", mon chéri. Tu vas bien ? Tu as une drôle de voix.
<br/>- Maman...
<br/>
<br/>Vous visualisez votre mère, cette vieille femme un peu ronde, à qui la moustache et un peu de duvet brun poussent depuis sa ménopause. Vous l'avez surprise un jour alors qu'elle sortait de la douche, et aviez été horrifié de voir à quel point ses lèvres du bas pendaient jusqu'aux genoux.

.";


echo "<br/><br/>Sexe en main, vos pensées s'entrechoquent.";







?>





  <?php 
   $m1="Je lui dis que je pensais &agrave; elle et que je l'aime";
$v1="paris/zonmai_room/z1_mamanlove";
$m2="Je lui demande si elle peut me pr&ecirc;ter de l'argent ";
$v2="paris/zonmai_room/z1_mamanargent";
$m3="Je lui dis d'aller se faire enculer, grosse vache  ";
$v3="paris/zonmai_room/z1_mamanfuck"; 
  
  
$_SESSION['flashsene']='mamanbranlette'; 
 $mere=check_family($nom);
$perso2=$mere['mere'];

 ?>

 










