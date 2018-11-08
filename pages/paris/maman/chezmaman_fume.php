


<?php  $action3='place="chez maman"';
$action1='karma=karma-200';
$action2='best=best+100';
 include("include/panel.php");
 
 $mere=mysqli_fetch_assoc(requete('SELECT mere FROM family WHERE nom="'.$nom.'";'));
$mere=$mere['mere'];
 
 
 
 ?><div id="texte">
<p>Vous p&eacute;tez un coup de boule &agrave; <?php echo $mere; ?>, votre génitrice qui &eacute;tale son gros derche au milieu du salon en grognant quelque chose manifestant la surprise. Point trop n'en faut, vous dites-vous pour vous m&ecirc;me. </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
in_log($nom, "Vous avez fumé votre mère", "100 points");
in_point($id,"fumemaman");
in_log($mere, "Votre fils vous a défoncé", "mere indigne");
requete('UPDATE `players` SET place="fumé par votre fils '.$nom.'" WHERE nom = "'.$mere.'" LIMIT 1;');
  requete('UPDATE `players` SET fume="boule" WHERE nom = "'.$mere.'" LIMIT 1;');


$m2="Je m'excuse poliment et je me tire";
$v2="paris/_street/street";
$m3="Je lui pète sa carte bleue";
$v3="paris/maman/chezmaman_CB";


    ?>


   
<?php 

 $mere=mysqli_fetch_assoc(requete('SELECT mere FROM family WHERE nom="'.$nom.'";'));
$mere=$mere['mere'];
$perso2=$mere;
 
$_SESSION['flashsene']='chezmaman_fume';
?>

 
























