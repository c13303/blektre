<?php  include("include/panel.php"); 
$hapen=check_special('voyante');

 $hapenkarma=check_stat($voyante);
 $hapenkarma=$hapenkarma['karma'];

 $directeur=check_special('directeur');
  $patron=check_special('patron');
   $vendeuse=check_special('vendeuse');
$ivryvendeuse=check_special('ivryvendeuse');
 

 
 ?>
<div id="texte">
<?php
if ($nom==$directeur||$nom==$patron||$nom==$vendeuse||$nom==$ivryvendeuse)
{
echo "Depuis que vous êtes plus haut gradé chez PACO RABANNE SARL, vous vous souvenez que vous méprisez ce genre de tâche ingrate.";
$m1="Je resserre ma cravatte et je m'éloigne";
$v1=$retour;
 
 
include('include/exit.php');
}

?>
Vous glandez derrière un stand à longueur de journée à vous vernir les ongles et de temps en temps vous racontez une blague à un client du centre commercial. Votre entreprise, PACO RABANNE SARL, vous paye une misère, de sorte que vous avez décidé d'empocher toutes les entrées d'argent.
<?php
	
	
	
	set_special($nom,'voyante');
	in_log($nom, 'Vous devenez la voyante de Parly II','métier d`avenir');
	$m2="Chouette";
	$v2=$retour;


	


    ?>



   


<?php 
 
if($vendeuse==$nom)
{$opt1='noplayer';}


$perso3=$nom;

$_SESSION['flashsene']='5voyante';

 ?>
 
























