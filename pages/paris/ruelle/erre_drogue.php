
<?php

 $action1='place ="rue des voyous"';
include("include/panel.php"); 

 $dealer=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="dealer";'));
 $mac=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="mac";'));

?>

<div id="texte">

  <p>- Pssst .. .t'aurais pas de la ... ???  
  <p>Vous imitez grossi&egrave;rement celui qui fume une cigarette drogue en faisant du bruit &quot;Pfffttt Pfffft ... tu vois ??&quot; &quot;t'en as ?&quot;  
  <p>  <br />
   
    <?php echo $dealer['player']." semble un peu saoulé. "; ?>
  <p>- Moi, je vend <?php echo $dealer['title']; ?> , r&eacute;pond-t-il. Je fais <?php echo $dealer['value']; ?>  le paquet.
  
  <p>  
  <p>  
  <p>
   
    
    <?php
	$hapen=$dealer['player'];
	
	$did=check_bag($id,"drogue");
if(!$did)
$did='zero';
if($did>999) echo '<p>Vous avez plus d`un kilo de came sur vous et ne pouvez pas en porter plus.</p>';
else
{
   $m1="Vendu";
$v1="paris/ruelle/erre_drogue_vendu";}
$m2="C'est de l'arnaque. Je le fume";
$v2="paris/ruelle/erre_fume";
$m3="J'ai changé d'avis";
$v3="paris/ruelle/erre"; 

    ?>
       
<?php 
$perso2=$hapen;
$_SESSION['flashsene']='erre_drogue';
 ?>

 
