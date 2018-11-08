

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


echo "La porte reste fermée. Qu'est ce que peut bien foutre cette grosse vache ?";

$m2="Je me tire";
$v2="paris/_street/street";


    

$_SESSION['flashsene']='chezmamanvide';
 

include('include/exit.php');
}
 
 ?>
<p>Vous sonnez à la porte et <?php echo $mere; ?> ,votre mère vous accueille avec le sourire.</p>
<p>- <b><?php echo $nom; ?></b>, mon chéri ! Tu n'imagines pas quel plaisir ça me fait de te voir.</p>
<p>- Bonjour maman </p>
<p>Vous entrez et balancez vos chaussures en vrac, comme d'habitude. Votre mère vous invite à aller prendre le goûter dans la cuisine.</p>
<?php
update_stat($nom,'karma','+2');
$bonus1="karma";
in_log($nom,"Vous rendez visite à votre mere ".$mere, "Good boy");


$hapen=$present;
if ($hapen)
{
echo $present." se trouve là, et dévore le quatre-quarts avec appétit. Il a l'air particulierement arogant avec son costume ridicule. Votre mère vous parle souvent de lui, un peu comme si c'était son propre fils, et cela vous a toujours enervé, au point que vous ne finissiez pas votre assiette. D'ailleurs, il ne reste presque plus de gâteau.";
 $m1="Je le salue poliment ";
$v1="paris/maman/chezmaman_salut";
$m2="Je bouffe ce que je peux de quatre quarts avant qu'il n'y en ait plus";
$v2="paris/maman/chezmaman_frite";
$m3="Je l'ignore et je vais discuter avec maman au salon";
$v3="paris/maman/chezmaman_salon";

}
else
{
echo "Vous engloutissez une bonne part de quatre quart. Cela vous a toujours donné des flatulences, probablement à cause des haricots secs.";
 $m1="Je vais discuter avec maman au salon";
$v1="paris/maman/chezmaman_salon";
$m2="Je rote poliment et je me tire";
$v2="paris/_street/street";


}


$_SESSION['flashsene']='chezmaman';
$perso2=$mere;

 ?>

 
























