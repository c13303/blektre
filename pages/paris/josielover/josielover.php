
<?php

 $action1='place ="3, rue des Glands"';
$action2="retour='paris/josielover/josielover'";
include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$dj=check_special('tube');
$josielover=check_special('josie_lover');



$_SESSION['flashsene']='josielover';


?>

<div id="texte">

<?php








if ($josielover==$nom)
{
echo "Vous vous sentez très fier d'être l'amant de Josette. Seulement, vous vous rappellez que vous n'habitez pas ici, mais que c'est la maison de son ex, ce gros porc.";
$m1="Huhu. Je suis con.";
$v1="paris/zonmai/zonmai";
 
include('include/exit.php');
}

$fumelover=check_point($id, 'fumelover');
if ($fumelover)
{
echo "Une voix sortie d'outre tombe vous hurle de dégager, connard. Vous ne comprenez pas bien, et vous vous en allez en vous disant que ".$josielover." n'est pas là.";
$m5="Je me tire";
$v5="paris/_street/streetest"; 
 
$_SESSION['flashsene']='josielover';
 
include('include/exit.php');
}








?>


  <p>Vous arrivez chez <?php echo $josielover; ?> et toquez habilement à la porte. </p>
  <p>C'est toujours quand personne ne vous observe que vous avez le plus de classe. Mais un jour la roue tournera.</p>
  <p>&nbsp;</p>
  <p>    <?php




 if ($present && $present!=$josielover)
 {
 echo $present." est là, et semble vouloir entrer également. Il vous adresse un petit rictus en signe de salut.";
 $hapen=$present;

 
 }


$entree='';
$entree2='';

$m2="Je toque à nouveau, de façon plus energique";
$v2="paris/josielover/josielover2";     
$m5="Je me tire";
$v5="paris/_street/streetest"; 



$hapen=$present;

    ?>
  </p>
 
<?php  ?>

 
