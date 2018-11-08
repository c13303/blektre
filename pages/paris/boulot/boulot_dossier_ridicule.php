<?php




 $action1='';
$action2='';
$action3='place="bureau"';


require("include/panel.php"); 

$hapen=$_SESSION['hapen'];

 ?>
<div id="texte">
  <p><b><?php echo $hapen; ?></b> se met &agrave; rire de fa&ccedil;on nerveuse et grotesque. </p>
  <p>- Et puis quoi encore ? Tu veux que je prenne ton salaire aussi ? Le patron sait que tu es un incapable ? </p>
  <p>Il vous tourne autour tandis que vous cherchez vos mots. </p>
  <p>
    <?php 
 

$m1="Je me tire en chialant";
$v1="paris/boulot/boulot_chiale";
$m2="Je l'ignore proprement et reste concentre";
$v2="paris/boulot/boulot_dossier2";
$m3="Je le fume";
$v3="paris/boulot/bureau_fume";

$opt1="patocherit";



// chouicess
  
  
  
  
    ?>
    </p>
 
<?php 
$_SESSION['flashsene']='bureau';
$perso2=check_special('patron');
$perso3=$hapen;
 ?>

 














