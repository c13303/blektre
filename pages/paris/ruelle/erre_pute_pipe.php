
<?php

 $action1='place ="rue des voyous"';
include("include/panel.php"); 

 $prostituee=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="prostituee";'));
 $mac=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="mac";'));

?>

<div id="texte">

<?php 

 $value=600;

if ($money<$value)
{
echo "- Hey, loser, t'as pas les moyens. Casse toi.";


}
else
{

echo $prostituee['title']." degraffe votre pantalon et introduit votre sexe, surlequel pendait encore une petite goutte d'urine, dans sa bouche. S'ensuivent des choses censurées dans le monde de maintenant.";

if ($sex<2)
{
	echo "<br>Vous éjaculez de façon précoce, et vous rhabillez honteusement.";
}
else
{
echo "<br>Vous la baisez sauvagement.";
}

echo "<br><br>Vous vous regardez dans le miroir tandis que ".$prostituee['player']." se rhabille";

$hapen=$prostituee['player'];
$value2=$value;
requete('UPDATE `players` SET money=money+'.$value.' WHERE nom = "'.$hapen.'" LIMIT 1;');
requete('UPDATE `players` SET money=money-'.$value.' WHERE nom = "'.$nom.'" LIMIT 1;');
in_log($nom, $prostituee['title'].' vous fait la totale mega perverse', '-'.$value.' euros');
$pourcentage=$value/2;
requete('UPDATE `special` SET value=value+'.$pourcentage.' WHERE nom = "prostituee" LIMIT 1;');

requete('UPDATE `players` SET sex=sex+700 WHERE nom = "'.$nom.'" LIMIT 1;');



in_log($hapen, 'Vous sucez '.$nom, "+".$value." euros");

$hapen=$prostituee['player'];



$m2="Je la tabasse";
$v2="paris/ruelle/erre_fume_hapen";
}


	$hapen=$prostituee['player'];
	

$m1="Je me casse";
$v1="paris/ruelle/erre"; 

    ?>
       
<?php 
$_SESSION['flashsene']="erre_pute_vendu";
$perso4=$hapen;
 ?>

 
