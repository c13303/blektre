
<?php

 $action1='place ="Cimetiere"';
$action2="retour='paris/cimetiere/13cimetiere'";
include("include/panel.php"); 
$endroit="au cimetiere";


$fantome=check_special('fantome');

?>

<div id="texte">

  <p>Vous arrivez dans le cimeti&egrave;re, lieu lugubre s'il est en. Pourtant, cet endroit a quelquechose de chaleureux. Peut etre est ce tout simplement l'urine qui coule le long de vos pantalons, flageollants de peur.. </p>
  <p>Vous vous balladez le long des tombes, et reconnaissez ce qui fut certains de vos anciens amis. </p>
  <p>
    <?php
	
	
 if ($present&&$present!=$fantome)
 {
 echo $present." se ballade également, habillé en noir. Encore un enfoiré de gothique, pensez vous.<br>";
 $hapen=$present;
$m4=$present.' est plutôt louche. Je ferais mieux de le fumer';
$v4="sp/fume"; 
 
 }


$entree='Nom du défunt';
$entree2='';



$m1="Je vais chercher cette tombe";
$v1="paris/cimetiere/13cimetiere_cherche";     
 
   
 
$m5="Je me tire";
$v5="paris/_street/streetouest"; 



$_SESSION['flashsene']='13cimetiere';

    ?>
  </p>
 


 
