

<?php  $action1='place ="rue des voyous"';
include("include/panel.php"); 

 $dealer=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="dealer";'));
 $dope=check_title('dealer');
 $prix=check_value('dealer');


 set_special($nom,'dealer');
 
  

 
 
 
 ?>
<div id="texte">
  <p>Vous &ecirc;tes le nouveau dealeur de la ruelle des voyous. Vous vendez <?php echo $dope; ?> à <?php echo $prix; ?> euros. <br />
    <br />
Vous pouvez choisir de vendre une autre drogue à un autre prix.</p>
  <p>Vous vendez (svp: mettre un article au nom de votre drogue. exemple: <strong>de la</strong> drogue, <strong>du</strong> shit ...)</p>
  <?php
$entree=$dope;
$entree2='';
 
$m1="Changer de drogue";
$v1="paris/ruelle/erre_deal2";
$m2="Je m'enfile une dose";
$v2="sp/sp_dtape";

$m3="C'est très bien comme ça";
$v3="paris/ruelle/erre";


    ?>
  
  
  </p>
 
<?php 
$perso2=$nom;
$_SESSION['flashsene']='erre_deal';
 ?>

 
























