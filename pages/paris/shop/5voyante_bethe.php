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
echo "Depuis que vous �tes plus haut grad� chez PACO RABANNE SARL, vous vous souvenez que vous m�prisez ce genre de t�che ingrate.";
$m1="Je resserre ma cravatte et je m'�loigne";
$v1=$retour;
 
 
include('include/exit.php');
}

?>
Vous glandez derri�re un stand � longueur de journ�e � vous vernir les ongles et de temps en temps vous racontez une blague � un client du centre commercial. Votre entreprise, PACO RABANNE SARL, vous paye une mis�re, de sorte que vous avez d�cid� d'empocher toutes les entr�es d'argent.
<?php
	
	
	
	set_special($nom,'voyante');
	in_log($nom, 'Vous devenez la voyante de Parly II','m�tier d`avenir');
	$m2="Chouette";
	$v2=$retour;


	


    ?>



   


<?php 
 
if($vendeuse==$nom)
{$opt1='noplayer';}


$perso3=$nom;

$_SESSION['flashsene']='5voyante';

 ?>
 
























