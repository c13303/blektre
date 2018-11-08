<?php




 $action1='';
$action2='retour="paris/boulot/boulot2"';
$action3='place="salle de reunion"';


include("include/panel.php"); 

$bonus1="karma";
$directeur=check_special('directeur');
$place='salle de reunion';

$present=player_present($nom,$place);
$hapen=$present['nom'];
 ?>
<div id="texte">
  <p>Vous mettez toute la boite au branle-bas de combat et arrêtez tout le monde en plein boulot. <b><?php echo $directeur; ?></b> arrive en courant et renverse ses lunettes, et vous avez du mal à dissimuler un petit rire de jubilation.</p>


<?php
$lastreu=get_time_point($id,'reunion');
$passed=$time-$lastreu;
if ($passed<40&&$passed!=0)
{
echo '<p>-Mais Patron: on a fait une réunion ce matin ! Dit il en tremblant.</p>Force vous est d`admettre qu`il a raison.';
$m5="Je vais me prendre un café parce que tout le monde me prend la tête";
$v5="paris/boulot/cafe";
 
$_SESSION['flashsene']='boulot_remplace_patron';
 $hapen=$directeur;
include('include/exit.php');
}
else
{
no_point($id,'reunion');
}

?>

  <p>- BON! gueulez vous. L'heure est grave: les Allemands veulent rompre leur contrat. Qu'est ce que vous proposez ?</p>
  <p>Tout le monde devient bl&ecirc;me.  
     </p>

    <?php 
	if(!$hapen)
	{
	$hapen=check_special('stagiaire');
	}
echo $hapen.' lève timidement la main et propose de réhausser les parts de marché en baissant les prix et en organisant une promotion spéciale plus ciblée. ';

echo $directeur.' fait une mine un peu boudeuse en disant qu`il n`est pas chaud vu la conjecture économique.';


$m1="Je félicite le stagiaire ".$hapen;
$v1="paris/boulot/boulotreunion_bindaboss_promotion";
$m2="J'écoute le directeur ".$directeur;
$v2="paris/boulot/boulotreunion_bindaboss_promotion_directeur";
$m3="J'explique au stagiaire ".$hapen." que son idée c'est de la merde";
$v3="paris/boulot/boulotreunion_bindaboss_virage";
$m4="J'engueule le directeur ".$directeur;
$v4="paris/boulot/boulotreunion_bindaboss_virage_directeur";
$m5="Je vais me prendre un café parce que tout le monde me prend la tête";
$v5="paris/boulot/cafe";






// chouicess
  
  
  
  
    ?>


 
<?php 
$_SESSION['flashsene']='boulotreunion';
$perso2=$directeur;
 ?>

 














