<?php 
$action1='place ="Train"';
$action2="retour='paris/voyage/09voyage'";

 include("include/panel.php"); 
$endroit="dans le train";
$_SESSION['endroit']=$endroit;



 
 ?><div id="texte">


    <?php
// take over 
			
			$endroit="dans le train";
			$hapen=check_special('controleur');
			$poste="controleur";
			$betheposte="paris/voyage/09bethecontroleur"; 

			
			include('include/00_takeover.php');
			
			/// fin take over 

	


    ?>



   
<?php 
$_SESSION['flashsene']="fume";
 ?>

 























