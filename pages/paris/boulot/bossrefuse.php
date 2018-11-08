<?php




 $action1='sex=sex+20';
 $action2='karma=karma-200';
$action3='';


include("include/panel.php"); 



 ?>
<div id="texte">
 <p>- <?php echo $nom; ?>, je suis d&eacute;&ccedil;u. Je pensais qu'au del&agrave; du rapport professionnel que nous avons, je pouvais compter sur un ami. Je me trompais.  

   <?php 
  $directeur=check_special('directeur');
    $stagiaire=check_special('stagiaire');
  if($nom==$directeur)
  {
  echo 'D`ailleurs, je pense que '.$stagiaire.' fera un meilleur directeur que vous.';
  set_special($stagiaire,'directeur');
  set_special($nom,'stagiaire');
  in_log($stagiaire,'Vous êtes promu directeur','chance');
  in_log($nom,'Vous êtes rétrogradé stagiaire','loser');
  $idstag=get_id($stagiaire);
  in_point($idstag,'bedirecteur');
  no_point($id,'bedirecteur');
  
  
  }
 
 ?> </p><?php
 
$m1="Je chiale";
$v1="paris/boulot/boulot_chiale";
$m3="Je retourne travailler";
$v3="paris/boulot/bureau";
$m4="Je le fume";
$v4="paris/boulot/bureaubossfume";


$perso2=check_special('patron');
$_SESSION['flashsene']='bureau';



// chouicess
  
  
  
  
    ?>
   
   

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
 