<?php  include("include/panel.php"); 
$endroit="à Parly II";
$_SESSION['endroit']=$endroit;

$hapen=check_special('voyante');

 $hapenkarma=check_stat($hapen);
 $hapenkarma=$hapenkarma['karma'];

 
 ?><div id="texte">


    <?php


// take over 
			

			$hapen=check_special('voyante');
			$poste="voyante";
			$betheposte="paris/shop/5voyante_bethe"; 

			
			include('include/00_takeover.php');
			
			/// fin take over 
	
	


    ?>



   
<?php 
$_SESSION['flashsene']="fume";
 ?>

 























