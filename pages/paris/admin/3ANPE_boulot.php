
<?php

 include("include/panel.php"); 
$present=player_present($nom,$place);
$present=$present['nom'];
  $assed=check_point($id,'ASSEDIC');


$clodo=check_special('clochard');
$_SESSION['endroit']='a l`ANPE';









?>

<div id="texte">
<?php
if ($assed)
{
echo "-Bien monsieur, dit la rouquine. Voyons ce que nous avons là ... J'ai un poste de libre à ivry ...
<br>-Laissez tomber.
<br>-Hmm.. (elle fouille son ordinateur) .. Voyons votre profil. J'ai une place chez PACO RABANNE SARL. Apparemment ils viennent de licensier quelqu'un.
<br>-...
<br>Vous acceptez de force, et vous vous dites que vous êtes vraiment le dernier des losers, mais qu'au moins, le loyer va être payé.
";
in_log($nom,'Vous reprenez votre poste chez PACO RABANNE SARL','Vie de merde');
no_point($id,'vire');
 
     $m2="Je fume cette salope de guichetierre.";
$v2="paris/admin/3ANPE_bordel"; 
$m5="Je sors";
$v5="paris/admin/3administration"; 




$_SESSION['flashsene']='3ANPE_patiente5';
   include('include/exit.php');
}

?>
  <p>- Tr&egrave;s bien, je vois monsieur <b><b><?php echo $nom; ?></b></b> , mais il faut vous vous inscriviez aux ASSEDIC, dit la rouquine.</p>
  <p>-Ah. Mais, heu, comment ?</p>
  <p>-Rendez vous aux ASSEDIC, rue Harry Potter, et inscrivez vous, puis revenez. </p>
  <p>&nbsp; </p>
  <p>
  
  
  <?php
 in_log($nom,'Vous galerez à l`ANPE','society sucker');
 in_point($id,'ANPE');
 
     $m2="Je fume cette salope de guichetierre.";
$v2="paris/admin/3ANPE_bordel"; 
$m5="Je sors";
$v5="paris/admin/3administration"; 





    ?>
  </p>
 
<?php 
$_SESSION['flashsene']="3ANPE_patiente5";
 ?>

 
