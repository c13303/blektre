
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

  <p><?php echo $josielover; ?> baille.</p>
  <p>Vous restez l&agrave;, comme un con, &agrave; ne plus savoir quoi dire. </p>
  <p>
    <?php

 if ($present && $present!=$josielover)
 {
 echo $present." jette la game boy par terre, fou de rage.<br>";
 $hapen=$present;
 $m1="Je vais fumer ".$present;
 $v1="sp/fume";
 
 }
?>
    </p>
    
  </p>
  <p>&nbsp;</p>
  
  <?php

$entree='';
$entree2='';


$m3="Je me tire";
$v3="paris/_street/streetest";     
     





    ?>
 
<?php 
$perso2=$josielover;
$_SESSION['flashsene']='josielover2';
 ?>

 
