<?php 
 // endroit texte
// $action1='place =""';

// chemin de retour
// $action2='retour="paris/"';

//eventuelle pr�action
// $action3='place =""';

require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];


 
 ?>
 
<div id="texte">
  <p>Texte</p>
  
  
  
	<?php 
	
	if($present)
		{
		$hapen=$present;
		echo '<p>'.$hapen.' fl�ne de mani�re aga�ante, � toucher tout les objets avec un air faussement connaisseur.';
		
		$m4='Je fume '.$hapen;
		$v4='sp/fume';
		}

	
	
	$m5="Je sors";
	$v5=$_SESSION['rue'];


	


    ?>
  

  
</p>
 
<?php  ?>

 
























