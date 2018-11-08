
<?php

 include("include/panel.php"); 

$coeur=check_special_t('coeur');
$dope=$coeur['title'];
$value=$coeur['value'];
$hapen=$coeur['player'];

?>

<div id="texte">

<?php 



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


requete('UPDATE `players` SET money=money+'.$value.' WHERE nom = "'.$hapen.'" LIMIT 1;');

requete('UPDATE `players` SET money=money-'.$value.' WHERE nom = "'.$nom.'" LIMIT 1;');



in_log($nom, "Vous avez pécho ".$dope." à ".$hapen, "-".$value." euros");



in_bag($id,'drogue',$value);
$did=check_bag($id,"drogue");
echo '<br><br>Vous avez maintenant '.$did.' meujes sur vous.<br><br>-Si tu veux te défoncer, je te suggère d`aller dans les chiottes du bar, vous conseille le dealer.';


in_log($hapen, "Vous avez vendu ".$dope." à ".$nom, "+".$value." euros");


$malus1="money";
$bonus2="money";
}



	
$m2="C'est de l'arnaque. Je le fume";
$v2="paris/eglise/12_fumecoeur";
$m1="Merci";
$v1=$retour; 

    ?>
       
<?php
$perso2=$hapen;

  ?>

 
