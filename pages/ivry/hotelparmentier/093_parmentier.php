<?php 
 // endroit texte
 $action1='place ="Parmentier Hotel"';

// chemin de retour
 $action2='retour ="ivry/hotelparmentier/093_parmentier"';$_SESSION['endroit']="à l'hotel Parmentier";

//eventuelle préaction
// $action3='place =""';

require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];


 
 ?>
 
<div id="texte">
<p>L'hotel Parmentier est r&eacute;put&eacute; pour ses tournois de Ricard et ses soir&eacute;es arros&eacute;es de Poker. Une ambiance PMU y r&egrave;gne, et vous sentez que l'ambassadeur doit y descendre de temps &agrave; autre, &agrave; en juger le nombre de papiers de Ferrero Rocher qui jonchent le sol.</p> <p>Au fond de la salle se trouve une salle de jeux, o&ugrave; passe en boucle le tube de <?php echo $dj; ?> en boucle. Ca pue le shit. </p>
  <p> 
    <?php
	 if ($present)
 {
 echo $present." tripote nonchalemment ses clés de voiture, de manière à bien montrer qu'il en a une. Il vous adresse un petit regard narquois.";
 $hapen=$present;
$m2="Je drague ".$present;
$v2="ivry/hotelparmentier/bar_drague"; 
 
 }
 	$m1="Je commande un verre";
$v1="ivry/hotelparmentier/bar_verre"; 
 
	
	

	
	
	
   
$m3="Je vais dans l'arriere salle";
$v3="ivry/hotelparmentier/bar_poker"; 
$m4="Je vais aux chiottes telephone";
$v4="sp/sp_chiottes"; 
	$m5="Je sors";
	$v5="ivry/09A_ivrycenter";




	
$_SESSION['flashsene']='ivryhotel';

    ?>
    
    
    
    </p>
    
    <?php  ?>
  </p>
