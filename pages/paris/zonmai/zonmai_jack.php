<?php 
 // endroit texte
// $action1='place =""';

// chemin de retour
$action2='retour="paris/_street/street"';

//eventuelle préaction
// $action3='place =""';

require("include/panel.php"); 

// recuperation de hapen
 $hapen=$_SESSION['hapen'];


 
 ?>
 
<div id="texte">
  <p>Vous donnez la bouteille de Jack à <b><?php echo $hapen; ?></b> qui se boglote un verre cul-sec avant de s'en servir un à siroter.</p>
  <p>Elle rougit et &eacute;carte un peu les jambes. </p>
  <?php
	
	
	update_stat($hapen,'sex','+300');
	update_stat($hapen,'life','+30');
	no_point($id,'jack');
	in_log($nom,'Vous offrez du Jack à votre femme '.$hapen,'Bogoss');
	in_log($hapen,'Votre mari '.$nom.' vous offre du Jack','Lovance');
 $m2="J'arrache sa culotte avec les dents et je la baise outrageusement";
 $v2="paris/zonmai/zonmai_child";
  $m3="Je la défonce";
 $v3="sp/fume";
  $m4="Je lui dit de dégager";
 $v4="paris/zonmai/zonmai_largue";
  $m5="Je me tire";
 $v5="paris/_street/street";



	


    ?>
  

  
</p>
 
<?php  ?>

 
























