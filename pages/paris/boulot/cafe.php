<?php  
$action1='retour="paris/boulot/cafe"';
$action2='frakass=frakass+5';
$action3='place="cafe"';
$_SESSION['endroit']='� la machine � caf�';

 include("include/panel.php");
 
 
 
 if ($life<110)
 {
 requete('UPDATE `players` SET life=life+5 WHERE nom = "'.$nom.'" LIMIT 1;');
 }
 
 
 
 ?><div id="texte">
 
 <p>
<?php




if ($present)
{echo $present." se trouve l�, et bois un caf�. Il a l'air particulierement arogant avec son costume ridicule.";
$m1="Je le salue poliment";
		$v1="paris/boulot/cafe_salut";
$m2="Je l'insulte";
$v2="paris/boulot/cafe_insulte";
$m3="Je le fume";
$v3="sp/fume";
$hapen=$present;
$_SESSION['flashsene']='cafe';
}
else
{
echo "
Il n'y a personne � la machine � caf�. Vous d�cidez de prendre un caf� et de poireauter l� tranquillement. Ca requinque.";


  
  $m1="Je bois un caf�, relax, doin' it ";
$v1="paris/boulot/cafe";
$m2="Je vais dans mon bureau";
$v2="paris/boulot/bureau";
$m3="Je crisse mon camp";
$v3="paris/_street/street";
$_SESSION['flashsene']='cafe';

}

?>

