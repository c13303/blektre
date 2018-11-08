

<?php  include("include/panel.php"); 

 
$price=clean($_GET['entree']); 
if($price=='0')
$price=1;
 $price=clean($price);
 requete('UPDATE `special` SET value="'.$price.'" WHERE nom = "coeur" LIMIT 1;');
 
$coeur=check_special_t('coeur');
$dope=$coeur['title'];
$value=$coeur['value'];
$hapen=$coeur['player'];
 ?>
<div id="texte">
  <?php echo "Vous êtes le nouvel enfant de coeur, vous vendez ".$coeur['title']." à ".$coeur['value']." euros les 100g.";



 $entree='';
 $entree2='';

$m1="Ouais mec.";
$v1=$retour;

    ?>
  </p>
 
<?php 

$bonus1="frakass";
$perso2=$nom;
	$perso3=$rael;

	$_SESSION['flashsene']='12eglise_coeur';
 ?>

 
























