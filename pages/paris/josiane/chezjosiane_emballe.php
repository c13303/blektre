<?php  $action3='place="chez josiane"';

 include("include/panel.php");
 

 ?>
<div id="texte">
 Vous vous approchez de Josiane et l'embrassez avec d�sespoir. Elle se laisse faire. "Bien jou� mon petit <b><?php echo $nom; ?></b>", vous dites vous pour vous m�me.
 <br>Vous passez une nuit romantique � regarder les s�ries sur M6 et au petit matin, vous vous apercevez qu'elle ne se g�ne plus pour p�ter au lit. 
 <?php 
 
 $ex=check_special('josie_lover');
 
 set_special($nom,'josie_lover');
 in_log($nom,'Vous �tes le nouveau mec de Josiane','Lover');
 in_log($ex, 'Josiane vous a largu� pour un autre mec', 'Loser');

 update_stat($nom,'karma','+500');
 
 
  $m1="C'est amour et bonheur";
$v1="paris/josiane/chezjosianeopen";
$m2="Cette petite conne n'a pas appris le respect. <br/>Je la fume";
$v2="paris/josiane/chezjosiane_fume";
$m3="Je prends un air t&eacute;n&eacute;breux et je me casse";
$v3="paris/_street/streetnord";
  
    ?>



</p></form>
 
<?php 
$_SESSION['flashsene']='chezjosiane_luv';
 ?>

 
























