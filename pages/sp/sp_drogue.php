
<?php

 include("include/panel.php"); 


$drogue=check_title('dealer');


$q=check_bag($id,"drogue");

?>

<div id="texte">



  <p>Vous déballez un paquet de <?php echo $drogue; ?> grossierement emballé. Il y a de quoi faire <?php echo $q; ?> lattes.</p>
  <p>
    <?php



$entree="50";
$m2="Je la sniffe";
$v2="sp/sp_drogue_avale";
$m4="Je me l'injecte";
$v4="sp/sp_drogue_injection";
$m1="Je la fume";
$v1="sp/sp_drogue_fume";


$m5="En fait non";
$v5=$retour;


$_SESSION['flashsene']='drogue';




    ?>
  </p>
 
<?php  ?>

 
