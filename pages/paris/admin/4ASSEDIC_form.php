
<?php

 include("include/panel.php"); 
$present=player_present($nom,$place);
$present=$present['nom'];
$hapen=$present;
$_SESSION['flashsene']="4ASSEDIC_patiente5";
?>

<div id="texte">

  <p>- Tr&egrave;s bien monsieur, dit elle. J'ai juste besoin du formulaire A440, qui stipule que vous avez &eacute;t&eacute; licenci&eacute;. Si vous avez d&eacute;j&agrave; travaill&eacute;, c'est votre ancien employeur qui doit vous le fournir.  </p>
 <?php
 $jai=check_point($id,'A446');
 if($jai)
 {
 echo "- A446, pas A440, stupide fonctionnaire de mes deux. Le voila.<br>
La pouffiasse remet ses lunettes.<br>
- Effectivement.
<br>Elle imprime un autre formulaire, et y applique quelques coups de tampons avant de vous le donner.
<br>-Voila monsieur. ";
in_log($nom,'Vous êtes inscrit aux ASSEDIC','');
in_point($id, 'ASSEDIC');

 $m3="Je lui éclate sa putain de tronche de salope";
$v3="paris/admin/3ANPE_bordel"; 
 $m4="Je me tire";
$v4="paris/admin/3administration"; 
 
include('include/exit.php');
 
 }
 
 
 
 
 
 
 
 $foute=check_point($id,'formchier');
 if($foute)
 {
 echo "<br>-Ecoutez, j'ai demandé ce foutu formulaire et le secreteriat de mon travail ne voit pas de quoi il s'agit. Vous pouvez vérifier ?";
 echo "<br><br>La mocheté réfléchit une seconde.
 <br>-Vous avez raison, c'est le formulaire A446 qu'il me faut.";
  $m3="Je lui éclate sa putain de tronche de salope";
$v3="paris/admin/3ANPE_bordel"; 
 $m4="Je me tire";
$v4="paris/admin/3administration"; 
 
include('include/exit.php');
 }

 ?>
 
 
  <p>- Merde, je ne l'ai pas. </p>
  <p>- Alors revenez plus tard, avec le papier. Merci monsieur, au revoir monsieur. </p>
  <p>&nbsp; </p>
  <p>
  
  </p>
  <p><?php
  
  in_log($nom,'Vous galerez aux ASSEDIC','Society loser');
  in_point($id, 'A440');

$m3="Je lui éclate sa putain de tronche de salope";
$v3="paris/admin/3ANPE_bordel"; 
 $m4="Je me tire";
$v4="paris/admin/3administration"; 






    ?>
  </p>
 
<?php  ?>

 
