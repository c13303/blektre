
<?php

 include("include/panel.php"); 




?>

<div id="texte">



  <p>Vous &ecirc;tes aux chiottes. Un t&eacute;l&eacute;phone se trouve l&agrave;. </p>
  <p>
    <?php



$m1="Je téléphone";
$v1="sp/telephone";
$drug=check_bag($id,"drogue");
if($drug)
{
$m2="Je me drogue";
$v2="sp/sp_drogue";
}
$m3="Je me tire";
$v3=$retour;

$entree='';
$entree2='';



$_SESSION['flashsene']='wc';



    ?>
  </p>
 
<?php  ?>

 
