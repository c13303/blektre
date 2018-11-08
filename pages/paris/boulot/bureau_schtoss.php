
<?php

 $action1='karma=karma-100';
$action2='best=best+100';
$action3='life=life-15';
include("include/panel.php"); 
$bonus12="score";
$malus1='life';
$malus12="karma";

?>

<div id="texte">

  <p>Vous saisissez votre chaise et la balancez dans la tronche de Patricia, qui se met &agrave; pisser abondamment du sang par le nez, ce qui salope toutes les chemises blanches alentours. Bertrand, le responsable r&eacute;seau ob&egrave;se, vous coince un clavier dans le travers de la gueule tandis que vous enfoncez un barreau de chaise dans le cul de Patricia, inanim&eacute;e. </p>
  <p>Finalement les tarlouzes du 2&egrave;me &eacute;tage finissent par d&eacute;barquent et vous mettent dehors de force, apr&egrave;s vous avoir administr&eacute; quelques gnons. </p>
  <p>    
    <?php

$what=check_point($id,"vire");
if (!$what)
{
in_log($nom, "Vous êtes viré", "Loser");
in_point($id,'vire');
if($nom==check_special('directeur'))
{
requete('UPDATE `special` SET player="'.$stagiaire.'" WHERE nom = "directeur" LIMIT 1;');
no_point($id,'bedirecteur');

$stagiaire=check_special('stagiaire');
set_special($stagiaire, 'directeur');
in_point(get_id($stagiaire),'bedirecteur');


}

}



$hapen=$present;
if ($hapen)
{echo $present." qui se trouve là, s'en prend une bonne dans la gueule et fait moins le malin.<br/>";
$endroit="au bureau";
include('pages/sp/fumage.php');
}

    


  $m1="Je ramasse mes dents et je me barre";
$v1="paris/_street/street";

  
     ?>

 

<?php 
$_SESSION['flashsene']='bureau_schtoss2';

 ?>

 












