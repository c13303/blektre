<?php




 $action2='karma=karma+500';
$action3='place="couloir"';


include("include/panel.php"); 


$fapen=check_special('patron');
 ?>
<div id="texte">
  <p>Le patron <?php echo $fapen; ?> semble être pris d'une soudaine constipation et alterne entre l'envie de chialer et celle de vous péter la gueule. </p>
  <p>- Vous m'avez eu, <b><?php echo $nom; ?></b> dit il d'un air rageur. Mais je vous aurais. Salaud !!!!! dit-il en sortant.</p>
  <p>- En attendant,  <?php echo $fapen; ?> ... N'oubliez pas de me rendre le dossier Canardo en temps et en heure. Merci.</p>
  <p>Vous claquez la porte. Vous voilà patron.</p>
  <p>&nbsp;</p>

  <?php 					
  $bonus1="karma";

  update_stat($nom,'best','+300');
  in_log($nom,'Vous prenez la place du patron','300 points');
  in_point($id,'betheboss');	
  no_point($id,'bedirecteur');
requete('UPDATE `players` SET karma=karma+50 WHERE nom = "'.$nom.'" LIMIT 1;');
requete('UPDATE `players` SET sex=sex+50 WHERE nom = "'.$nom.'" LIMIT 1;');
set_special($nom,'patron');


$nouveau_dirlo=check_special('stagiaire');
set_special($nouveau_dirlo,'directeur');
set_special($fapen,'stagiaire');
	$ido=get_id($nouveau_dirlo);
	in_point($ido,'bedirecteur');
 	in_log($nouveau_dirlo,'Vous passez de stagiaire à directeur','chance');		
	in_log($fapen,'Vous passez de patron à stagiaire','pauvre merde');
		

						  $m1="Je vais dans mon bureau";
						$v1="paris/boulot/bureau";
						$m2="Je vais à la machine à café";
						$v2="paris/boulot/cafe";
						$m3="Je prends les lunettes de soleil du patron et je me sauve";
						$v3="paris/_street/street";
 



// chouicess
  
  
  $_SESSION['flashsene']='zonmai_largue';
  $perso2=$hapen;


 ?>

 














