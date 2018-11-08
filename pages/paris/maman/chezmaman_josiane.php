


<?php  $action3='place="chez maman"';
$action1='sex=sex-50';
$malus1="sex";


 include("include/panel.php");
 

 
 if ($life<100)
 {
 $bonus1="life";
 requete('UPDATE `players` SET life=100 WHERE nom = "'.$nom.'" LIMIT 1;');
 }
 
 ?><div id="texte">
<p>Vous &eacute;talez votre cin&eacute;ma en chialant comme une petite merde, la recette qui marche &agrave; tous les coups pour s'attirer la tendresse de votre bonne et velue m&egrave;re. Vous &ecirc;tes vraiment pitoyable. M&ecirc;me si elle semble plus occup&eacute;e &agrave; caresser le chien, cela vous fait un bien fou, vous vous sentez beaucoup mieux. </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
in_log($nom,'Vous chialez dans les bras de votre mere','Tapette');
$m1="Je vérifie que personne ne se trouve devant la maison et je me tire";
$v1="paris/_street/street";
$m3="J'ai honte de ce que je viens de faire. Je la fume.";
$v3="paris/maman/chezmaman_fume";
$m2="Je lui demande de l'argent";
$v2="paris/maman/chezmaman_argent";

    ?>


   
<?php 

 $mere=mysqli_fetch_assoc(requete('SELECT mere FROM family WHERE nom="'.$nom.'";'));
$mere=$mere['mere'];
$perso2=$mere;
$_SESSION['flashsene']='chezmaman_salon';
 

?>

 
























