<?php  include("include/panel.php"); 

$_SESSION['endroit']=$endroit;

 


 
 ?><div id="texte">


    <?php
			
			// take over 
			
			$endroit="a la gare";
			$hapen=check_special('clochard');
			$poste="clochard";
			$betheposte="paris/gare/1gare_bethemendiant"; 

			
			include('include/00_takeover.php');
			
			/// fin take over 

	


    ?>



   
<?php 
$_SESSION['flashsene']="fume";
 ?>

 























