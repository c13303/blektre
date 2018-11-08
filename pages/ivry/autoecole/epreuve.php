<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php

 $action1='money =money-1000';

include("include/panel.php"); 
in_log($nom,'Vous prenez une leçon de conduite','Poids lourd');


$_SESSION['autogood']=0;

if($present)$hapen=$present;


?>

<div id="texte">

<p>Vous montez au volant du gros v&eacute;hicule. </p>
<p>- C'est pour conduire une camionnette, apr&egrave;s ?</p>
<p> Vous r&eacute;fl&eacute;chissez &agrave; ce que vous allez r&eacute;pondre, tout en allumant le contact. </p>
<p>
    <?php

	
	
	
	
	if($hapen) echo '<p>'.$hapen.', qui passe aussi l`examen, se fout bien de votre faciès constipé, et vous invite à vous détendre.</p>';
	


$m1="Non salope, un putain de 4x4. Ca t'exite, hein ?";
$v1="ivry/autoecole/epreuve2GOOD"; 
$m2="Oui madame.";
$v2="ivry/autoecole/epreuve2BAD"; 
$m3="Je reste concentré sur la route.";
$v3="ivry/autoecole/epreuve2BAD"; 


$_SESSION['flashsene']='autoexamen';


 ?>
</p>
  