


<?php  $action3='place="chez maman"';
$action1='karma=karma-200';
$action2='best=best+100';
 include("include/panel.php");
 

 
 
 
 ?><div id="texte">
<p>Vous commencez &agrave; fouiller son sac fr&eacute;n&eacute;tiquement quand elle se met &agrave; geindre comme un vieux phoque an&eacute;mique. Vous trouvez la carte bleue. Vous allez surement pouvoir vous payer des trucs de feu-hou, comme disent les jeunes, avec un truc pareil ! Vous vous grattez le cul pour savourer pleinement ce moment de joie.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
in_log($nom, "Vous avez volé la carte bleue de votre mère", "100 points");
in_point($id, 'CB');



$m2="Je suis probablement parano. Je m'excuse poliment et je me tire";
$v2="paris/_street/street";
$_SESSION['flashsene']='chezmaman_CB';

    ?>


   
<?php 
 $mere=mysqli_fetch_assoc(requete('SELECT mere FROM family WHERE nom="'.$nom.'";'));
$mere=$mere['mere'];
$perso2=$mere;
 ?>

 
























