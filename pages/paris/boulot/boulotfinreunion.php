<?php




include("include/panel.php"); 


 ?>
<div id="texte">
  <p>Une pouffiasse se met &agrave; parler des parts de march&eacute; de la marque X et de l'impact commercial de la nouvelle campagne sur la m&eacute;nag&egrave;re de plus de cinquante ans, celle qui a les l&egrave;vres qui pend, du genre de votre m&egrave;re. </p>
  <p>Au bout d'une heure de discussions st&eacute;riles, le contrat est sign&eacute; et tout le monde s'en va. Le patron vous jette un dernier regard avant de s'&eacute;loigner. </p>

  <?php 
  
$m1="Je vais dans mon bureau";
$v1="paris/boulot/bureau";
$m2="Je vais à la machine à café,<br/> là ou l'aventure m'attends ";
$v2="paris/boulot/cafe";
$m3="Je me tire de cet endroit poucrave ";
$v3="paris/_street/street";
  
  if($present)
  {
  set_stat($present,'place','"cafe"');
  }
  
    ?>

 
<?php 

$perso2=check_special('patron');
$_SESSION['flashsene']='boulotreunion';




 

?>

 














