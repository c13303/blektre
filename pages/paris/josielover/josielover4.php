
<?php

 $action1='place ="3, rue des Glands"';
$action2="retour='paris/_street/streetest'";

include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$dj=check_special('tube');
$josielover=check_special('josie_lover');
$endroit="chez ".$josielover;

?>
<div id="texte">

<?php

if ($dj==$nom)
{
echo "Soudain votre morceau passe � la radio. ".$josielover." devient bl�me.<br>- Hm, il est pas mal ton morceau. Tu es DJ ? demande t il de fa�on inqui�te.
<br><br>";
update_stat($nom,'best','+500');
in_log($nom,'Vous avez boul� '.$josielover.', le copain de Josiane','500 points');
in_log($josielover,'Vous avez �t� boul� par '.$nom.', un soupirant de Josiane','Esp�ce de naze');
$bonus1="score";
$bonus12="karma";
in_point($id,'fumelover');
$m2='Ouais mec, j`assure un max et  je me tire';
$v2='paris/_street/streetest';
}
else
{
echo $josielover." �clate de rire.<br>- Allez, bouge, bouge ... dit il en vous invitant � bouger de l� d'un geste de la main un peu familier.";
$m5="Je me tire";
$v5="paris/_street/streetest"; 
}


 if ($present && $present!=$josielover)
 {
 echo $present." demande s'il reste de la bi�re au frigo.<br>";
 $hapen=$present;
 $m1="Je vais fumer ".$present;
 $v1="sp/fume";
 
 }
?>
</p>

  <p>&nbsp;</p>
  
  <?php

$entree='';
$entree2='';


$m4="Au risque de froisser Josiane, je craque compl�tement <br> et j'explose ce batard de ".$josielover;
$v4="paris/josielover/josielover_explose";  
    
     





    ?>
 
<?php 
$perso2=$josielover;
$_SESSION['flashsene']='josielover2';
 ?>

 
