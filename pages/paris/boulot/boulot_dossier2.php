<?php




 $action1='';
$action2='karma=karma+30';
$action3='place="bureau"';
$bonus1="karma";

include("include/panel.php"); 

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
echo '<div id="texte">
  <p>Le patron débarque.</p><p>- '.$nom.', je t`en supplie, j`ai mon épaule droite qui me gratte, il faut que tu m`aides. </p><p>Apparemment, le patron sort tout juste des WC.</p>';
  
$m1="Je m'execute gentiment";
$v1="paris/boulot/bossgrate";
$m2="Je m'execute en faisant la tronche";
$v2="paris/boulot/bossgrate";
$m3="Je refuse";
$v3="paris/boulot/bossrefuse";
$m4="Je le fume";
$v4="paris/boulot/bureaubossfume";
$_SESSION['flashsene']='bureau';
$perso2=$patron;

include('include/exit.php');
}




if($random==2)
{
if($present) $hapen=$present;

if($nom==$stagiaire && !$hapen)
	$hapen=$directeur;

if(!$hapen)
	$hapen=$stagiaire;

echo '<div id="texte">
  <p>'.$hapen.' vient vous taxer une cigarette.</p><p>- J`en ai pas, dites vous d`un air penaud. Vous avez toujours trouvé le goût des cigarettes écoeurant à cause d`une malformation que vous avez depuis tout petit. Alors, pour pouvoir fumer, vous avez l`habitude de l`accomoder de shit, mais vous n`en prenez plus au boulot depuis qu`on vous a surpris à parler à la photocopieuse. </p><p>- Pfff, laisse échapper '.$hapen.'.
</p>';
  
$m1="Je le fume";
$v1="sp/fume";
$m2="Je continue de travailler, imperturbable face à son mépris";
$v2="paris/boulot/boulot_dossier3";
$m3="Je vais me chercher un café";
$v3="paris/boulot/cafe";
$perso3=$hapen;
$_SESSION['flashsene']='bureau';
include('include/exit.php');
}







 ?>
<div id="texte">
  <p>Vous ne comprenez rien au dossier. On dirait qu'il manque une feuille. Serait ce cette salope de Patricia qui l'aurait volée ? Où le patron pour vous faire une farce? </p>

  <?php 
  

  
 
$hapen=$present;

if ($hapen)
{
 echo $present."  passe dans le couloir en souriant. Peut être est ce bien lui.<br/>";
$m1="Je lui demande poliment si c'est lui qui traitait le dossier avant";
$v1="paris/boulot/boulot_dossier_ridicule";
$m2="J'écarte ces sales hypothèses paranoiaques et je reste concentré sur mon dossier.";
$v2="paris/boulot/boulot_dossier3";
$m3="Je le chope et je le fume";
$v3="sp/fume";
}
else

{

$m1="J'appelle Patricia";
$v1="paris/boulot/boulot_patricia";
$m2="J'écarte ces sales hypothèses paranoiaques et je reste concentré sur mon dossier.";
$v2="paris/boulot/boulot_dossier3";
$m3="Je vais me chercher un café";
$v3="paris/boulot/cafe";
}






// chouicess
  
  
  
  
    ?>

 
<?php 
$_SESSION['flashsene']='bureau';
$perso2=$hapen;
 ?>

 














