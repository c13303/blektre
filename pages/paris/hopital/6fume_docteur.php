<?php 
$action1='place ="hopital"';
$action2='retour="paris/_street/streetnord"';

 include("include/panel.php"); 

$_SESSION['endroit']=$endroit;

 
 ?><div id="texte">


    <?php

// take over 
			
			$endroit="à l'hopital";
			$hapen=check_special('docteur');
			$poste="docteur";
			$betheposte="paris/hopital/6hopital_bedocteur"; 

			
			include('include/00_takeover.php');
			
			/// fin take over 


    ?>



   
<?php 
$_SESSION['flashsene']="fume";
 ?>

 























