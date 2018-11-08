
<?php

 $action1='place ="rue des voyous"';
include("include/panel.php"); 

 $prostituee=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="prostituee";'));
 $mac=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="mac";'));
$hapen=$mac['player'];
?>

<div id="texte">
<?php

if ($prostituee['player']==$nom)
{
$opt1='pute';
$perso4=$nom;
include('pages/paris/ruelle/erre_bethepute.php');
include('include/exit.php');


}

?>
  <p>Une ballasse vous aborde alors que vous approchez.  
  <p>- Salut gosse-beau, tu montes ? Je m'appelle  <?php echo $prostituee['title']; ?>  
  <p>Vous constatez qu'il ne s'agit que de  <?php echo $prostituee['player']; ?> déguisé.
  <p> - Alors, dit  <?php echo $mac['player']; ?>, ca t'int&eacute;resse ? C'est  100 la pipe, et 600 la totale extra perverse.
  <p>  
  <p>  
  <p>
   
    
    <?php
	
	
   $m1="Vendu pour la pipe";
$v1="paris/ruelle/erre_pute_vendu";
$m2="Vendu pour la totale";
$v2="paris/ruelle/erre_pute_pipe";
$m3="C'est de l'arnaque. Je le fume";
$v3="paris/ruelle/erre_fume_mac";
$m4="J'ai changé d'avis";
$v4="paris/ruelle/erre"; 
$m5="Je vends mon boule";
$v5="paris/ruelle/erre_pute_postule"; 

    ?>
 
<?php 
$perso4=$prostituee['player'];
$perso3=$hapen;
$_SESSION['flashsene']='erre_pute';
 ?>

 
