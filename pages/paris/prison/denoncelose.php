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
<p>Vous sortez votre zgueg fl&eacute;tri. Le policier semble perdre patience.</p>
<p>- Ecoute moi bien, espece de petite tapette indolente, tu va remballer ton spaghetti et te barrer vite fait avant que je ne te botte le cul !</p>
<p>&nbsp;  </p>
<p> 
  <?php 
	
	
$m5='Je sors';
$v5="paris/admin/3administration";
	

$m2="Je le fume";
$v2="paris/prison/fume";
	
	
	
$perso2=$taulard1;
$perso3=$taulard2;
$perso4=$taulard3;
$hapen=$keuf;
$_SESSION['flashsene']='prison';

    ?>
  
  
  
  </p>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</p>
