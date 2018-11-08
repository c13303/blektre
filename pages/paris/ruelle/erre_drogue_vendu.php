
<?php

 $action1='place ="rue des voyous"';
include("include/panel.php"); 

 $dealer=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="dealer";'));
 $mac=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="mac";'));

?>

<div id="texte">

<?php 

 $value=$dealer['value'];

if ($money<$value)
{
echo "- Hey, loser, t'as pas les moyens. Casse toi.";
}
else
{

echo "- Tope là.";


$did=check_bag($id,"drogue");
if(!$did)
$did='zero';


echo '<br>Vous aviez déjà '.$did.' meujes de drogue sur vous.';

$hapen=$dealer['player'];
$value2=$value;
requete('UPDATE `players` SET money=money+'.$value.' WHERE nom = "'.$hapen.'" LIMIT 1;');

requete('UPDATE `players` SET money=money-'.$value.' WHERE nom = "'.$nom.'" LIMIT 1;');


$lastlog=check_log($nom);
if($lastlog!="Vous avez pécho ".$dealer['title']." à ".$hapen)
	in_log($nom, "Vous avez pécho ".$dealer['title']." à ".$hapen, "-".$value." euros");


$lastlogh=check_log($hapen);
if($lastlogh!="Vous avez vendu ".$dealer['title']." à ".$nom)
in_log($hapen, "Vous avez vendu ".$dealer['title']." à ".$nom, "+".$value." euros");

in_bag($id,'drogue','100');
$did=check_bag($id,"drogue");
echo '<br><br>Vous avez maintenant '.$did.' meujes sur vous.<br><br>-Si tu veux te défoncer, je te suggère d`aller dans les chiottes du bar, vous conseille le dealer.';





$malus1="money";
$bonus2="money";
}


	$hapen=$dealer['player'];
if($did>999) echo '<p>Vous avez plus d`un kilo de came sur vous et ne pouvez pas en porter plus.</p>';
else{$m2="Vends moi encore un paquet";
$v2="paris/ruelle/erre_drogue_vendu"; 
}
$m1="Allright mama";
$v1="paris/ruelle/erre"; 


    ?>
       
<?php
$perso2=$hapen;
$_SESSION['flashsene']="erre_drogue2";
  ?>

 
