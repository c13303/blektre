<?php 
 // endroit texte


// chemin de retour

//eventuelle préaction
// $action3='place =""';

require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];

$rael=check_special('rael');
$issecte=check_point($id,'secte');
$defunt=clean($_GET['entree']);
$defunt=strtolower($defunt);
$_SESSION['defunt']=$defunt;
 ?>
 
<div id="texte">
  <p><?php echo $rael; ?> se concentre.</p>
  <p>- Hmmmmmmmmmmm ... </p>
  <p>
  <?php
  
  $dead=mysqli_fetch_assoc(requete('SELECT * FROM players WHERE life<=0 AND nom="'.$defunt.'";'));
	


			if(!$dead)
			{
			echo "Je ne vois aucun défunt de nom là, dit-il avec mépris.";
			}
			else
			{
			$prix=$dead['time'];
			echo "Je vois ... Je vois ... Hm. Je vois le genre. Ca vous coutera ".$prix. " euros. Plus un euro de commission.";
			
			if($money>$prix)
				{
				$m1='Je paye';
				$v1='paris/eglise/12ressu_OK';
				$_SESSION['resu_price']=$prix;
				}
				$m2='Je peux pas payer cette somme.';
				$v2='paris/eglise/12malin';
						
			
			}
			
			$entree='';
			$entree2='';

	
	
	$m4='Demander un autre nom';
	$v4='paris/eglise/12ressuciter';
	$m5="Je me tire de cette putain de secte";
	$v5="paris/_street/streetouest";

$perso2=$coeur;
	$perso3=$rael;

	$_SESSION['flashsene']='12eglise_rael';
	


    ?>
  </p>

 
<?php  ?>

 
























