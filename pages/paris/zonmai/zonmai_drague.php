<?php  $action2='karma=karma+10';
$bonus1="karma";
$action3='place="zonmai"';

 require("include/panel.php");
 
$hapen=$_SESSION['hapen'];
 ?>
<div id="texte">
 
  
  
  
    <?php 
	

 $hapensex=check_stat($hapen);
 $lifehapen=$hapensex['life'];
 $hapensex=$hapensex['sex'];
 
 if ($sex>$hapensex)
	{
 echo "Vous faites semblant de pleurer et ".$hapen." s'approche de vous pour vous consoler. Alors vous l'attrapez par [malheureusement la netiquette nous interdit de narrer ce qui se passe après]
 <br>
 <br>Au petit matin, vous fumez tranquillement une cigarette tous les deux.
 <br>
 <br>- Dis, tu m'aimes ? demande ".$hapen."
 <br>- Hm, hm .. contentez vous de répondre.";
 
 in_log($nom,'Vous baisez avec '.$hapen, 'un petit coup +50 points');
    in_log($hapen, $nom.' vous baise', 'un petit coup');
	update_stat($nom, 'best', '+50');
	update_stat($nom, 'sex', '-50');
	update_stat($hapen, 'sex', '-50');
	
	$m1="-Oui. Reste avec moi, dites vous sur l'air de l'Aziza de Balavoine.";
	$v1="paris/zonmai/zonmai_couple";
	
	$idh=get_id($hapen);
	$henceinte=check_point($idh,'enceinte');
	
	

  if ($lifehapen>25&&!$henceinte)
  {
  in_log($hapen, "Vous tombez enceinte de ".$nom, "Le miracle de la vie");
  requete('INSERT INTO family VALUES (NULL, "bébé", "'.$hapen.'", "'.$nom.'");');
  }




  
	}
	else
	{
	echo "Vous essayez d'emballer ".$hapen." qui vous repousse doucement.
	<br> - Non.., dit-il.
	<br> Vous pleurez un peu et demandez des explications.
	<br> - Tu ne me trouves pas désirable ?
	<br> - C'est pas ça ... mais avec les mecs, tu manques de tact.";
	

	
	}
 
   $endroit="a la zonmai";
requete('UPDATE `players` SET place="dragué par '.$nom.' '.$endroit.'" WHERE nom = "'.$hapen.'" LIMIT 1;');
 
  	 $m4="Tout le monde va croire que je suis gay. Je ferais mieux de partir.";
$v4="paris/_street/street";
$m2="Ce connard se croit tout permis. Je le fume.";
$v2="paris/zonmai/zonmai_fume";

$m3="Je regarde la télé";
$v3="paris/zonmai/zonmai_tele";



    ?>


 
<?php 
$perso2=$hapen;
$_SESSION['flashsene']='zonmai_drague';
 ?>

 
























