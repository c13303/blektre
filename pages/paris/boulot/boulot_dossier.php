<?php




 $action1='retour="paris/boulot/bureau"';
$action2='karma=karma+30';
$action3='place="bureau"';


include("include/panel.php"); 

$bonus1="karma";

 ?>
<div id="texte">
  <p>Vous vous acharnez toute la matin&eacute;e sur le dossier El Canardo, vous en chiez des bulles, vous sentez l'acide gastrique vous ronger de l'int&eacute;rieur et vous pr&eacute;voyez une bonne chiasse pour 16 heures. </p>
  <?php 
  
 
$hapen=$present;

if ($hapen)
{ echo $present."  passe la tête par la porte, et laisse échapper un petit ricanement<br/>";
$m1="Je lui demande de l'aide";
$v1="paris/boulot/boulot_dossier_ridicule";
$m2="Je l'ignore proprement et reste concentre";
$v2="paris/boulot/boulot_dossier2";
$m3="Je le fume";
$v3="sp/fume";
}
else

{

echo "<br>Vous avez envie de chialer. Vous luttez. Toute votre vie, chaque effort ne vous a apporté que douleur et si peu de reconnaissance. <br><br>Vous entendez Patricia ricaner en écrivant des emails dans le box d'à côté. Vous allez encore devoir vous taper tout son boulot, probablement.<br>";
$m1="Je lui demande de l'aide";
$v1="paris/boulot/boulot_dossier_ridicule2";
$m2="Je l'ignore proprement et reste concentre";
$v2="paris/boulot/boulot_dossier2";
$m3="Je vais la pécho et je la fume";
$v3="paris/boulot/bureau_schtoss";
}






// chouicess
  
  
  
  
    ?>

 
<?php 
$_SESSION['flashsene']='bureau';
$perso2=$hapen;
 ?>

 














