<?php  $action1='place ="rue des voyous"';

include("include/panel.php"); 

 
$price=clean($_GET['entree']); 
if($price<0)
$price=1;
if($price>1000)
$price=1000;



 $price=clean($price);
 requete('UPDATE `special` SET value="'.$price.'" WHERE nom = "dealer" LIMIT 1;');
 $dealer=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="dealer";'));
 ?>
<div id="texte">
  <?php echo "Vous êtes  le dealer de la rue des voyous, vous vendez ".$dealer['title']." à ".$dealer['value']." euros le paquet de 100.";



 $entree='';
 $entree2='';

$m1="Ouais mec.";
$v1="paris/ruelle/erre";

    ?>
  </p>
 
<?php 
$_SESSION['flashsene']='erre_deal';
$bonus1="frakass";
$perso2=$nom;
 ?>

 
























