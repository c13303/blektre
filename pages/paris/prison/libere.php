<?php 

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

$caution=check_stat($taulard,'karma');
 $caution=$caution['karma'];
 if($caution<0)
 $caution=$caution*-1;
 
 $caution=$caution*2;
 $_SESSION['caution']=$caution;
 $_SESSION['libere']=$taulard;
 ?>
 
<div id="texte">
  <p>Tu veux libérer <?php echo $taulard; ?> hein ? Ca te coutera <?php echo $caution; ?> euros.</p>
  <?php 

if($money>=$caution)
{
$m1="Je paye. Libérez le.";
$v1="paris/prison/libereOK";
}
$m2="Laissez tomber";
$v2=$retour;	

$perso2=$taulard1;
$perso3=$taulard2;
$perso4=$taulard3;
$hapen=$keuf;
$_SESSION['flashsene']='prison';
    ?>
  

  
</p>