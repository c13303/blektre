<?php 
 include("include/panel.php"); 



 
 ?>
<div id="texte">
  <p>Vous êtes controleur. Vous jetez du train les petits fraudeurs qui veulent voyager sans payer. Vous êtes en quelque sorte le phoenix des hôtes du wagon.</p>
  <p>    <?php
	
	
	
	set_special($nom,'controleur');
	in_log($nom, 'Vous devenez controleur','métier d`avenir');
	$m2="Chouette";
	$v2="paris/voyage/09voyage_controleur";

$perso2=$nom;
	$_SESSION['flashsene']='voyage_controle';


    ?>
  

  
</p>
 
<?php  ?>

 
























