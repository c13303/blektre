

<?php  $action1='place ="rue des voyous"';
require("include/panel.php"); 


 $hapen=$_SESSION['hapen'];
 
 
 
 
 
 
 ?><div id="texte">


    <?php

 $req=requete('SELECT karma FROM players WHERE nom="'.$hapen.'";');
 $hapenkarma=mysqli_fetch_assoc($req);
 $hapenkarma=$hapenkarma['karma'];
 if ($karma>$hapenkarma)
 {
  echo $hapen." n'a pas le temps de réfléchir que votre pied se trouve déjà dans ses boules.";


	$endroit="dans la rue des voyous";
	require('pages/sp/fumage.php');
	
	$m1="Je me tire de là";
	$v1="paris/ruelle/erre";
	$m3="Je le viole";
	$v3="paris/ruelle/erre_viol";
}
else
{

echo "Vous vous jetez sur ".$hapen." mais tel le pigeon dans l'enfer des villes, il esquive votre attaque et vous adresse un prompt coup de boule rotatif.";

$endroit="dans la rue des voyous";
	require('pages/sp/fumagebeen.php');
	
	$m2="Je me tire d'ici tel un chien battu";
	$v2="paris/_street/streetest";


}
	
	


    ?>



   
<?php 
$_SESSION['flashsene']="fume";
 ?>

 
























