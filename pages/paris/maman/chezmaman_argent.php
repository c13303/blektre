
<?php  $action3='place="chez maman"';

 include("include/panel.php");
 $mere=mysqli_fetch_assoc(requete('SELECT mere FROM family WHERE nom="'.$nom.'";'));
$mere=$mere['mere'];
 ?>
 
 <div id="texte"> <?php

$what=check_point($id,"maman100");
if ($what)
{
 echo "- Ah oui, tu voulais 100 euros.<br><br>".$mere.", votre mère vous donne 100 euros.";
 $bonus1="money";
 $malus2="money";
 
   requete('UPDATE `players` SET money=money+100 WHERE nom = "'.$nom.'" LIMIT 1;');


  in_log($nom, "Votre mere ".$mere." vous donne 100 balles","Fils à maman");
  in_log($mere, "Vous donnez 100 balles à votre fils ".$nom, "Pauvre conne");
  in_point($id,"mamanfric");
  no_point($id,"maman100");

   
 

}

else

{
echo "- Mon chou, je n'ai pas de liquide sur moi là. Tu aurais du me prévenir.";


}

 
 
  $m1="Je vais jouer dans ma chambre.";
$v1="paris/maman/chezmaman_chambre";
$m2="Je lui parle de Josiane en chialant";
$v2="paris/maman/chezmaman_josiane";
$m3="Je me tire poliment";
$v3="paris/_street/street";








    ?>


   
<?php 

 $mere=mysqli_fetch_assoc(requete('SELECT mere FROM family WHERE nom="'.$nom.'";'));
$mere=$mere['mere'];
$perso2=$mere;
$_SESSION['flashsene']='chezmaman_salon';
 

?>

 

























