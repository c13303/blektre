<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php

 $action1='place ="Cambrousse de banlieue"';$_SESSION['endroit']="à la cambrousse";
$action2='retour ="ivry/periph/side"';
include("include/panel.php"); 

$_SESSION['rue']='ivry/periph/side';




if($present)$hapen=$present;


?>

<div id="texte">

<p>Ici, la ville parait assez lointaine. Les oiseaux n'y chantent pas plus, mais l'odeur de goudron, elle est encore plus tenace. Finalement, c'est &ccedil;a, la vraie nature. </p>
<p>
    <?php
	
	if($hapen)
	{
	echo $hapen.' jette ses clopes par terre, polluant cet espace vierge.';
	$m3='Je défonce '.$hapen;
	$v3="sp/fume";

	}
	
	
	
	
	
	
	
	
	
	
$m1="Je vais à l'auto école";
$v1="ivry/autoecole/1auto"; 
$m2="Je vais au chenil";
$v2="ivry/chenil/1chenil"; 
$m5="Je retourne vers Ivry";
$v5="ivry/periph/1periph"; 

$_SESSION['flashsene']='cambrousse';


 ?>
</p>
  