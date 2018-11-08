


<?php  $action3='place="chez maman"';
$action1='sex=sex+15';
 include("include/panel.php");
 

 
 
 
 ?><div id="texte">
<p>Vous commencez &agrave; raconter votre vie &agrave; votre m&egrave;re qui fait semblant de comprendre ce que vous dites et sa mani&egrave;re de hocher la t&ecirc;te tout en parlant au chien manifeste clairement son total d&eacute;sint&eacute;r&ecirc;t pour vous, le tout enrob&eacute; de politesse -s&ucirc;rement par piti&eacute;, car votre m&egrave;re vous a toujours consid&eacute;r&eacute; comme un rat&eacute;. </p>
<p>&nbsp;</p>

<?php

$m2="Je suis probablement parano. Je m'excuse poliment et je me tire";
$v2="paris/_street/street";
$m3="J'ai enduré ça trop longtemps. Je la fume.";
$v3="paris/maman/chezmaman_fume";
$m2="Je chiale comme une merde";
$v2="paris/maman/chezmaman_josiane";

    ?>


   
<?php 

 $mere=mysqli_fetch_assoc(requete('SELECT mere FROM family WHERE nom="'.$nom.'";'));
$mere=$mere['mere'];
$perso2=$mere;
$_SESSION['flashsene']='chezmaman_salon';
 

?>

 
























