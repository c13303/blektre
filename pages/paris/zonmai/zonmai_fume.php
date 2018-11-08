<?php  $action3='place="zonmai"';
 require("include/panel.php");
 
 $hapen=$_SESSION['hapen'];
 
 $req=requete('SELECT karma FROM players WHERE nom="'.$hapen.'";');
 $hapenkarma=mysqli_fetch_assoc($req);
 
 
 
 ?><div id="texte">
 
 
 <?php 

 $req=requete('SELECT karma FROM players WHERE nom="'.$hapen.'";');
 $hapenkarma=mysqli_fetch_assoc($req);
 if ($karma>$hapenkarma['karma'])
 
 {
  echo $hapen." se jette sur vous mais tel le pigeon dans l'enfer des villes, vous esquivez son attaque et lui adressez un prompt coup de boule rotatif.";


	$endroit="a la zonmai";
	require('pages/sp/fumage.php');
	
	$m1="Je me pose, tranquille";
	$v1="paris/zonmai/zonmai_tele";
	$m2="Je me tire d'ici";
	$v2="paris/_street/street";
	$m3="Je le viole";
	$v3="paris/zonmai/zonmai_viol";
}
else
{

echo "Vous vous jetez sur ".$hapen." mais tel le pigeon dans l'enfer des villes, il esquive votre attaque et vous adresse un prompt coup de boule rotatif.";
$endroit="a la zonmai";
	require('pages/sp/fumagebeen.php');
	
	$m2="Je me tire d'ici tel un chien battu";
	$v2="paris/_street/street";


}









    ?>



   
<?php 
$_SESSION['flashsene']="fume";
 ?>

 
























