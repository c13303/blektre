<?php 


 include("include/panel.php"); 

$hapen=check_special('directeur');


?>
<div id="texte">
<p>Le directeur, monsieur  <b><?php echo $hapen; ?></b> vous regarde de haut en bas en souriant en coin, les mains dans les poches. </p>
<p>- Alors Irma, il te faut quoi ? </p>

<?php
$m1="Je fume cet enfoiré.";
$v1="paris/shop/5bordel"; 
$m2="Je voudrais une promotion.";
$v2="paris/shop/5promotion"; 
$m3="Je veux démissionner";
$v3="paris/shop/5demission"; 
$m5="Je sors";
$v5=$retour; 
$_SESSION['flashsene']='face';

 
 
?>