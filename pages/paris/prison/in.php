<?php 
 // endroit texte
$action1='place ="Prison"';

// chemin de retour
 $action2='retour="paris/prison/in"';
$_SESSION['rue']="paris/prison/in";
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
  <p>Vous êtes dans votre cellule</p>
  
  
  
	<?php 
	
	if($taulard1&&$taulard1!=$nom)
		echo '<p>'.$taulard1.' hurle qu`il exige son avocat.</p>';
		


		
		if($taulard2&&$taulard2!=$nom)
		echo '<p>'.$taulard2.' chiale doucement au fond de la cellule.</p>';
		
		
	if($taulard3&&$taulard3!=$nom)
		echo '<p>'.$taulard3.' essaye de chier, mais semble incommodé par votre présence.</p>';

	

$m1="Je hurle au keuf de me liberer";
$v1="paris/prison/hurle";
$m2="J'exige de telephoner";
$v2="sp/telephone";
$m3="Je chiale comme une merde";
$v3="paris/prison/chiale";
	
$perso2=$taulard1;
$perso3=$taulard2;
$perso4=$taulard3;
$hapen=$keuf;
$_SESSION['flashsene']='prison';

    ?>
  

  
</p>
 


 
























