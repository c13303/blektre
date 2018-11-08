<?php




 $action1='sex=sex-1';
$action3='life=life-2';
$action2='karma=karma+30';
$bonus1="karma";
$malus1="sex";
$malus12="life";

require("include/panel.php"); 

$patron=check_special('patron');
$stagiaire=check_special('stagiaire');
$directeur=check_special('directeur');
if($present==$patron && $nom==$directeur)
	$present=$stagiaire;

if($present==$patron && $nom==$stagiaire)
	$present=$directeur;

$random=rand(1,4);

if($random==1)
{
	
	// paris/boulot/boulot_dossier4
echo '<div id="texte">
  <p>Le patron débarque.</p><p>- '.$nom.', je t`en supplie, est ce que tu peux appeller ma femme pour lui dire de reserver un hotel en Corse pour ce week-end ?</p>';
  
$m1="Je m'execute gentiment";
$v1="paris/boulot/bosshotel";
$m2="Je m'execute en faisant la tronche";
$v2="paris/boulot/bosshotel";
$m3="Je refuse";
$v3="paris/boulot/bossrefuse";
$m4="Je le fume";
$v4="paris/boulot/bureaubossfume";
$_SESSION['flashsene']='bureau';
$perso2=$patron;

require('include/exit.php');
}

 ?>
<div id="texte">
  <p>Vous sentez votre ventre se gribouiller, des remontées acides vous
  obligent à faire des renvois parfaitement écoeurants. Vous vous retenez, et serrez les fesses, 
  car la tâche passe avant tout. </p>
<br>Soudain c'est le drame. Votre pantalon se tâche et vous avez l'anus brûlé au dernier degré.
  <p>&nbsp;</p>
  <?php 
 in_log($nom,"Vous avez chié dans votre froc",'Putain..');
 
 $what_player_do=' passe devant la porte. "Putain de merde"! hurle-t-il, "tu as chié dans ton froc ?? Ah putain le con !!" Puis il éclate de rire. <br/>';

//require('pages/checkplayer2.php');

if (!$hapen)
{
echo 'Patricia entre pour faire une photocopie. "Putain de merde"! hurle-t-elle, "tu as chié dans ton froc ?? Ah putain le con !!" Puis elle éclate de rire. ';
$m1="Je la fume";
$v1="paris/boulot/bureau_venerchiasse";
$opt1='patocherit';

}
else
{
$m1="Je le fume";
$v1="sp/fume";
$perso2=$hapen;
}
 
 
 

$m2="Je fonce aux chiottes";
$v2="paris/boulot/boulot_wc";
$m3="Je met du papier dans l'imprimante";
$v3="paris/boulot/boulot_dossier5";







// chouicess
  
  
  
  
    ?>

 
<?php 
$_SESSION['flashsene']='bureau';
 ?>

 














