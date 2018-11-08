<?php




 $action1='';
$action2='retour="paris/zonmai_room/z1_message"';
$action3='place="zonmai"';


include("include/panel.php"); 




 ?><div id="texte">
 
 
 <?php
 
 $conjoint=check_maque($nom);
 $conjoint=$conjoint['player2'];
 
  $lifehapen=check_stat($conjoint);
 $lifehapen=$lifehapen['life']; 
 

 
 


 
  if($conjoint && $lifehapen<1)
 {
  echo "Le cadavre de ".$conjoint." traine là, pourissant, fumissant de manière infâme.<br>Vous le jetez à la poubelle.<br>";
  in_log($nom,'Vous jetez le cadavre de votre conjoint, '.$conjoint, 'puanteur');


	requete('DELETE FROM relationship WHERE player="'.$nom.'" AND player2="'.$conjoint.'";');
requete('DELETE FROM relationship WHERE player="'.$conjoint.'" AND player2="'.$nom.'";');
 }
 
 
 
 
 
 
 $touze=mysqli_fetch_assoc(requete('SELECT COUNT(player) as E FROM relationship WHERE player="'.$nom.'" AND relation="maqués";'));
$touze=$touze['E'];

if ($touze>1)
{
		
		echo "Vos gonzesses,";
		$f=1;
		$gonzes=requete('SELECT player2 FROM relationship WHERE player="'.$nom.'" AND relation="maqués";');
		while ($feum=mysqli_fetch_assoc($gonzes))
		{
		echo $feum['player2'].', ';
		$f=$f+1;
		
		$u='m'.$f;
		$w='v'.$f;
		$$u="Je largue ".$feum['player2'];
		$persal='perso'.$f;
		$$persal=$feum['player2'];
		$$w='paris/zonmai/zonmai_largue'.$f;
		
		
		}
		echo "sont en train de se foutre sur la gueule violemment<br>- ".$nom." , il va falloir choisir, enflure !<br>";
		
		   $m1="Je propose une petite partouze pour arranger tout ça";
		 $v1="paris/zonmai/zonmai_partouze";


 
  

$_SESSION['flashsene']='zonmai_touze';
 
 include('include/exit.php');

		
		
 }
 
 
  
 if ($conjoint &&$lifehapen>0&&$touze<2)
 {


 echo $conjoint." est là, et fait la vaisselle tranquillement. <br> TU MA RAMENé à BOIRE ? hurle-t-elle. Elle a pris cette mauvaise habitude, vous ne savez pas pourquoi.";
 $josielover=check_special('josie_lover');
 if ($josielover==$nom)
 {
 echo "Elle fait la gueule.<br>- T'étais encore chez cette salope de Josiane, hein ?";
 update_stat($nom,'karma','-100');
 }
  $perso2=$conjoint;
$enfant4=mysqli_fetch_assoc(requete('SELECT nom FROM family WHERE pere="'.$nom.'" AND nom!="'.$perso2.'" AND nom!="bébé";'));
$perso4=$enfant4['nom'];
$enfant3=mysqli_fetch_assoc(requete('SELECT nom FROM family WHERE pere="'.$nom.'" AND nom!="'.$perso2.'" AND nom!="'.$perso4.'" AND nom!="bébé";'));
$perso3=$enfant3['nom'];
if($enfant4)
{
$gosses="<br>".$perso4.", votre petit dernier, scotche grave devant la télé. Fils d'abruti, pensez vous.";
}
 if($perso3)
{
$gosses="<br>Les mômes scotchent grave devant la télé. Enfants d'abrutis, pensez vous.";
}
 echo $gosses;
 
 $hapen=$conjoint;
   $m1="Je change de chaine";
 $v1="paris/zonmai/zonmai_tele";
 $m2="Je lui fais un enfant";
 $v2="paris/zonmai/zonmai_child";
  $m3="Je lui dit de dégager";
 $v3="paris/zonmai/zonmai_largue";
 
 $jack=check_point($id,'jack');
 if($jack)
 {
  $m4="Je lui donne la bouteille de Jack pour qu'elle arrête de m'emmerde";
 $v4="paris/zonmai/zonmai_jack";
 
 
 }
 
 $m5='Que de la merde. Je me casse';
$v5="paris/_street/street";
 
  
  $_SESSION['flashsene']='zonmai_tele';
  $perso2=$conjoint;



 include('include/exit.php');
}
 
 
 

$hapen=$present;
if ($hapen)
{echo $present." se trouve là, et semble faire comme s'il était chez lui. Vous trouvez cela un peu gonflé.<br/>";
 $m1='Je le salue courtoisement et je rentre dans ma maison';
$v1="paris/zonmai/zonmai_salut";
$m2="Je l'invite";
$v2="paris/zonmai/zonmai_invite";
$m3="J'ai du me tromper de maison. Je me tire.";
$v3="paris/_street/street";
$_SESSION['flashsene']='zonmai';
}
else
{
$m='zonmai_tele';
echo "Vous êtes devant la télé dans votre salon.";
$m5='Que de la merde. Je me casse';
$v5="paris/_street/street";
$m2="J'ecoute mes messages";
$v2="sp/telephone";
$m4="J'appelle ma mère";
$v4="paris/zonmai_room/z1_maman";
$m3="J'appelle Josiane";
$v3="paris/zonmai_room/z1_josiane";
 $_SESSION['flashsene']='zonmai_tele';

}


    ?>

  


   
