

<?php  $action3='place="chez maman"';

 include("include/panel.php");
 




$mere=check_family($nom);
 $mere=$mere['mere'];

$mumlife=check_stat($mere);
$mumlife=$mumlife['life'];
 
 
 
 ?><div id="texte"><?php
 
$what=check_point($id,'fumemaman');
if ($what || $mumlife<1)
{


echo "La porte reste ferm�e. Qu'est ce que peut bien foutre cette grosse vache ?";

$m2="Je me tire";
$v2="paris/_street/street";


    

$_SESSION['flashsene']='chezmamanvide';
 

include('include/exit.php');
}
 
 ?>
<p>Vous sonnez � la porte et <?php echo $mere; ?> ,votre m�re vous accueille avec le sourire.</p>
<p>- <b><?php echo $nom; ?></b>, mon ch�ri ! Tu n'imagines pas quel plaisir �a me fait de te voir.</p>
<p>- Bonjour maman </p>
<p>Vous entrez et balancez vos chaussures en vrac, comme d'habitude. Votre m�re vous invite � aller prendre le go�ter dans la cuisine.</p>
<?php
update_stat($nom,'karma','+2');
$bonus1="karma";
in_log($nom,"Vous rendez visite � votre mere ".$mere, "Good boy");


$hapen=$present;
if ($hapen)
{
echo $present." se trouve l�, et d�vore le quatre-quarts avec app�tit. Il a l'air particulierement arogant avec son costume ridicule. Votre m�re vous parle souvent de lui, un peu comme si c'�tait son propre fils, et cela vous a toujours enerv�, au point que vous ne finissiez pas votre assiette. D'ailleurs, il ne reste presque plus de g�teau.";
 $m1="Je le salue poliment ";
$v1="paris/maman/chezmaman_salut";
$m2="Je bouffe ce que je peux de quatre quarts avant qu'il n'y en ait plus";
$v2="paris/maman/chezmaman_frite";
$m3="Je l'ignore et je vais discuter avec maman au salon";
$v3="paris/maman/chezmaman_salon";

}
else
{
echo "Vous engloutissez une bonne part de quatre quart. Cela vous a toujours donn� des flatulences, probablement � cause des haricots secs.";
 $m1="Je vais discuter avec maman au salon";
$v1="paris/maman/chezmaman_salon";
$m2="Je rote poliment et je me tire";
$v2="paris/_street/street";


}


$_SESSION['flashsene']='chezmaman';
$perso2=$mere;

 ?>

 
























