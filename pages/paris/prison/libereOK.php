<?php 
 // endroit texte
$action1='place ="Prison"';

// chemin de retour

//eventuelle préaction
// $action3='place =""';

require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];


 $keuf=check_special('keuf');
 $listetaulards=requete('SELECT * FROM checkpoint WHERE objet="prison" ORDER BY id DESC');
 $n=0;
 while($data=mysqli_fetch_assoc($listetaulards))
 {
 $n++;
 $var_tolar='taulard'.$n;
 // taulard1 = 
 $$var_tolar=get_nom($data['id_player']);
 
 }


$caution=$_SESSION['caution'];
 $libere=$_SESSION['libere'];
 update_stat($nom,'money','-'.$caution);
 ?>
 
<div id="texte">
  <p>Le commissaire <?php echo $keuf; ?> empoche les billets. Il se lève et va libérer <?php echo $libere;?> qui gromelle. Ce dernier vous adresse un regard et un sourire hypocrite avant de prendre la porte.</p>
  <p>- Autre chose pour toi, blanc bec ? </p>
    <?php 
$idh=get_id($libere);
no_point($idh,'prison');
in_log($nom,'Vous payez la caution de '.$libere, 'gentil');
in_log($libere, $nom.' paye votre caution de prison','vous etes libre');

$m1="Well";
$v1='paris/admin/3mairie';	

$perso2=$taulard1;
$perso3=$taulard2;
$perso4=$taulard3;
$hapen=$keuf;
$_SESSION['flashsene']='prison';
    ?>
</p>
