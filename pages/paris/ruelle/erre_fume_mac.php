
<?php  $action1='place ="rue des voyous"';
require("include/panel.php"); 

 $prostituee=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="prostituee";'));
 $mac=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="mac";'));
 $hapen=$_SESSION['hapen'];
 
 
 
  
 $verif='SELECT * FROM players ORDER BY best DESC;';
  $req=requete($verif);
 
 
 
 ?><div id="texte">


    <?php

// take over 
			
			$endroit="dans la ruelle";
			$hapen=check_special('mac');
			$poste="mac";
			$betheposte="paris/ruelle/erre_mac"; 
			$notbe='prostituee';
			$notbe2='dealer';

			
			require('include/00_takeover.php');
			
			/// fin take over 


    ?>



   
<?php 
$_SESSION['flashsene']="fume";
 ?>

 
























