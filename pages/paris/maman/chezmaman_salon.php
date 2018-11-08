<?php  $action3='place="chez maman"';

 include("include/panel.php");
 


 
 
 ?><div id="texte">
<p>-Alors <b><?php echo $nom; ?></b>, mon chéri, tu ne fumes pas trop ?</p>
<p>-Maman. </p>
<p>-Ca va sinon ? Tu manges bien ? Qu'est ce que tu fais en ce moment ?</p>
<?php
if($present)
echo $present."  passe dans le couloir en se grattant le cul.";


$m1="Je parle de mon boulot";
$v1="paris/maman/chezmaman_chiant";

$m3="Je lui demande de l'argent";
$v3="paris/maman/chezmaman_argent";
$m2="Je lui parle de Josiane en chialant";
$v2="paris/maman/chezmaman_josiane";





    ?>


   
<?php 

 $mere=mysqli_fetch_assoc(requete('SELECT mere FROM family WHERE nom="'.$nom.'";'));
$mere=$mere['mere'];
$perso2=$mere;
$_SESSION['flashsene']='chezmaman_salon';
 

?>

 
























