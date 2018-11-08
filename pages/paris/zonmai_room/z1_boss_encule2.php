<?php

 $action2='karma=karma-10';
$action3='';
include("include/panel.php"); 

?>
<div id="texte">
<p>- <b><b><?php echo $nom; ?></b></b> ... Inutile de venir au bureau aujourd'hui. Au revoir.</p>
<p>Et le patron de raccrocher. </p>
<?php

in_log($nom, 'Vous �tes vir�','Rebus de la soci�t�');
in_point($id,'vire');
$stagiaire=check_special('stagiaire');
$ids=get_id($stagiaire);

if($nom==check_special('directeur'))
{
requete('UPDATE `special` SET player="'.$stagiaire.'" WHERE nom = "directeur" LIMIT 1;');
in_log($stagiaire,'Vous passez de stagiaire � directeur','chance');
no_point($id,'bedirecteur');
in_point($ids, 'bedirecteur');
}


$malus1="karma";
  $m1="J'�ructe de joie, et saute dans ma Lada pour aller f�ter �a au bar ";
$v1="paris/street";
$m2="Je vais hurler ma tristesse par la fenetre ";
$v2="paris/zonmai_room/z1_parisien";

  
  $r=rand(1, 2); 
if($r==1) 
		{ 
			$m3="Je d�prime comme une merde";
			$v3="paris/zonmai_room/z1_deprime";
		}
if($r==2) 
		{ 
			$m3="J'appelle ma m�re, ma seule v�ritable alli�e dans ce monde de brutes ";
			$v3="paris/zonmai_room/z1_maman";
		}
  
  
    ?>

  
 
<?php 

$_SESSION['flashsene']='message';




 ?>

 




