


<?php  $action3='';
$action1='';
$action2='';
 require("include/panel.php");
 

 $hapen=$_SESSION['hapen'];
 

 ?><div id="texte">

<?php
$req=requete('SELECT * FROM players WHERE nom="'.$hapen.'";');
 $hapenkarma=mysqli_fetch_assoc($req);
 $hapenkarma=$hapenkarma['karma']-$hapenkarma['frakass'];
 $karma=$karma-$frakass;
 if ($karma>$hapenkarma)
 
 {
  echo "Après avoir évalué la situation, il s'avère que ".$hapen." est en tort. Les gens le huent, et il vous propose d'arranger ça avec un peu d'argent.";
$bonus1='money';
$malus2='money';
$endroit="lors d'un constat";
$agresseur=$nom;
$victime=$hapen;
	require('pages/sp/racket.php');

	

	$m2="Je me tire d'ici";
	$v2=$retour;

}
else
{

  echo "Après avoir évalué la situation, il s'avère que vous êtes en tort. Les gens vous huent, et ".$hapen." vous propose d'arranger ça avec un peu d'argent.";
$malus1='money';
$bonus2='money';
$endroit="lors d'un constat";
$agresseur=$hapen;
$victime=$nom;
	require('pages/sp/racket.php');

	
	$m2="Je me tire d'ici tel un chien battu";
	$v2=$retour;


}


    ?>


   
<?php 
$_SESSION['flashsene']='streetdissident';
 ?>

 
























