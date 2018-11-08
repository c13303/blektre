
<?php

 $action1='place ="3, rue des Glands"';
$action2="retour='paris/_street/street'";
include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$dj=check_special('tube');
$josielover=check_special('josie_lover');

?>

<div id="texte">

  <p><?php echo $josielover; ?> vous ouvre, en se grattant les couilles. Comment Josiane peut elle aimer un type pareil ?? </p>
  <p>- Ben, entre.</p>
  <p>Vous entrez et contemplez le taudis qu'est devenu ce qui put etre une jolie maison..</p>
  <p>    <?php


 if ($present && $present!=$josielover)
 {
 echo $present." se faufile jusqu'àu fond de la maison, attrape une game boy et se met à jouer à Tétris.<br>";
 $hapen=$present;
 
 }
?>
</p>
  <p>- Alors, comment va la vie, dit <?php echo $josielover; ?> d'une fa&ccedil;on plutot provocante. </p>
  <p>- Ho, tu sais ... </p>
  <?php

$entree='';
$entree2='';

$m1="Ca va bien. Je fais mon petit bonhomme de chemin. Et toi ?";
$v1="paris/josielover/josie_chiant";
$m2="Ca va mal.";
$v2="paris/josielover/josie_chiant";
$m3="Comment Josiane peut kiffer une baltringue comme oite ?";
$v3="paris/josielover/josielover3";     
     





    ?>
  
  
 
<?php 
$perso2=$josielover;
$_SESSION['flashsene']='josielover2';
 ?>

 
