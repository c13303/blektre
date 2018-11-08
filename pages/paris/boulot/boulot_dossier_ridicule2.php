<?php




 $action1='';
$action2='';
$action3='place="bureau"';


include("include/panel.php"); 



 ?>
<div id="texte">
  <p>Patricia se met &agrave; rire de fa&ccedil;on nerveuse et grotesque. </p>
  <p>- Et puis quoi encore ? Tu veux que je prenne ton salaire aussi ? Le patron sait que tu es un incapable ? </p>
  <p>Elle vous tourne autour tandis que vous cherchez vos mots. </p>
  <p>
    <?php 
  
$hapen=$present;

if ($hapen)
{echo $present."  passe la tête par la porte, et laisse échapper un petit ricanement<br/>";
$m1="Je me tire en chialant";
$v1="paris/boulot/boulot_chiale";
$m2="Je les ignore proprement et reste concentre";
$v2="paris/boulot/boulot_dossier2";
$m3="Je les fume";
$v3="paris/boulot/bureau_schtoss";
}
  else
  {
  
$m1="Je me tire en chialant";
$v1="paris/boulot/boulot_chiale";
$m2="Je l'ignore proprement et reste concentre";
$v2="paris/boulot/boulot_dossier2";
$m3="Je la fume";
$v3="paris/boulot/bureau_schtoss";

}





// chouicess
  
  
  $opt1="patocherit";
  
    ?>
    </p>
 
<?php 
$_SESSION['flashsene']='bureau';

$perso2=check_special('patron');

 ?>

 














