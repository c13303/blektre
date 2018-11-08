<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php

 include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$hapen=check_special('voyante');
$voyante=$hapen;
$hapenlife=check_stat($hapen,'life');
$hapenlife=$hapenlife['life'];
$entree=$_GET['entree'];
$entree=clean($entree);
?>

<div id="texte">
<?php


$entree=strtolower($entree);


$msg=" Merci pour tes 12 euros.";


in_log($nom,'La voyante '.$hapen.' vous donne un conseil pour dans la vie','Sagesse');

in_log($hapen,'Vous faites une prédiction à '.$nom,'Sagesse');
////////// ENTREES
$words=requete('SELECT * FROM pedia;');
while($bite=mysqli_fetch_assoc($words))
	{
		if(strstr($entree,$bite['need']))
			{
				if($bite['alias'])
					{
						$speak=mysqli_fetch_assoc(requete('SELECT definition FROM pedia WHERE need="'.$bite['alias'].'";'));
						$dif=nl2br($speak['definition']);
						echo $dif;
					}
					else
					{
					$dif=nl2br($bite['definition']);
					 echo $dif;
					}
					
			}
		
		
	}
	
if(!$dif)
{
	$entree=ucfirst($entree);
	$id_h=get_id($entree);
	if($id_h)
	 $bio=mysqli_fetch_assoc(requete('SELECT bio FROM bio WHERE id_player='.$id_h.';'));
	 
$bio=$bio['bio'];
$bio=nl2br($bio);
if($bio)
{
$dif=$bio;
echo "La voyante prend un air constipé et se met à parler comme si elle était possédée. <p>".$dif;
}
	}
	
	
if(!$dif)
{
echo "<br>Je vais y réfléchir très serieusement .. <b>Reviens me poser la même question demain: tu auras la réponse !</b><br><br>";
mail('erreur@ci0.org','la voyante s`est chiée dessus','La voyante n`a pas su répondre quand '.$nom.' lui a demandé: '.$entree.'

http://kanar.ci0.org/blektre/toolz/voyante_pedia.php','From: la_voyante@blektre.info');

}

/// FIN DES ENTREES






echo $msg;

$entree='';
$m1="Je relache 12 euros pour une autre indication";
$v1="paris/shop/5voyante_ask";
$m3="Je m'éloigne";
$v3="paris/shop/5commerce";

 
if($vendeuse==$nom)
{$opt1='noplayer';}
if($voyante==$nom)
{$opt1='noplayer';}

$perso2=$vendeuse;
$perso3=$voyante;

$_SESSION['flashsene']='5voyante';
  
include('include/exit.php');
?>
