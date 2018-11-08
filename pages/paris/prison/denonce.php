<?php 
 // endroit texte


// chemin de retour

//eventuelle préaction
// $action3='place =""';

require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];


  $keuf=check_special('keuf');
 $listetaulards=requete('SELECT * FROM checkpoint WHERE objet="prison" ORDER BY id DESC');
 $n=0;
 while($data=mysqli_fetch_assoc($listetaulards))
 {
 $n++;
 $var_tolar='taulard'.$n;
 // taulard1 = 
 $$var_tolar=get_nom($data['id_player']);
 
 }
 
 
 
 ?>
 
<div id="texte">
  <p>- Ecoutez, j'ai un putain de tuyau : le Slave Shop &agrave; ivry dissimule une putain d'organisation terroriste !!</p>
  <p>- Ah ouais ? dit le flic. Et vous avez des preuves ?</p>
  <p>Soudain, vous comprenez que la vie n'est qu'un jeu, presque aussi difficile que le démineur en mode hard. </p>
  <?php 
	
	

	

$m1="Je déballe mon pénis tout flétri comme preuve de torture";
$v1="paris/prison/denoncelose";
$m2="Je le fume";
$v2="paris/prison/fume";
	
	
	
$perso2=$taulard1;
$perso3=$taulard2;
$perso4=$taulard3;
$hapen=$keuf;
$_SESSION['flashsene']='prison';

    ?>
  

  
</p>
 


 
























