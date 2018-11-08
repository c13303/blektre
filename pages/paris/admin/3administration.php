<?php




 $action1='';
$action2='retour="paris/admin/3administration"';
$action3='place="Centre administratif"';
$fplace='center_present';

include("include/panel.php"); 
  $assed=check_point($id,'ANPE');
 ?>
<div id="texte">
 Vous arrivez devant la batisse administrative. Ce quartier a la réputation d'être le quartier le plus chiant du monde bien que, depuis votre tendre enfance, vous fantasmez devant ces immeubles de bureau en songeant à toutes les petites pétasses en tailleur qui doivent s'y affoler. 
 
 <?php
  
  
  if($present)
  {
  $hapen=$present;
  echo "<p>".$hapen." vous regarde avec insistance. Son petit sourire narquois sous-entend clairement qu'il trouve votre costume relativement desuet par rapport au sien.";
  $m4='Je fume cet enfoiré de '.$hapen;
  $v4='sp/fume';

}

  
  
  
  
  $m1='Je vais à l`ANPE';
$v1="paris/admin/3ANPE";

$m5="Je me tire";
$v5="paris/_street/streetcenter";

if($assed)
	{
	$m2="Je vais aux Assedic";
	$v2="paris/admin/4ASSEDIC";
	}

	  $m3='Je vais à la mairie';
$v3="paris/admin/3mairie";
	
	  $m4='Je vais à la banque';
$v4="paris/admin/banque/banque";
  ?>

  


   
<?php 


$_SESSION['flashsene']='admin';

 ?>

 














