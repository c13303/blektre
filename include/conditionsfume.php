<?php

if(!$hapen)erreur('no hapen conditionsfume');

 $suprecoef=300;
 $fracoef=3;
 $lifecoef=2;
 $sexcoef=2;
 
 $hapenstat=check_stat($hapen,'karma');
$hapenkarma=$hapenstat['karma'];
 $hapenfrakass=$hapenstat['frakass'];
 $hapenfrakass=$hapenfrakass*$fracoef;
  $hapensex=$hapenstat['sex'];
  $hapensex=$hapensex/$sexcoef;
$hapenlife=$hapenstat['life'];
$hapenlife=$hapenlife*$lifecoef;
$supremacy=check_supremacy($hapen);
$hpenalty=$supremacy*$suprecoef;



 
 
$selfsup=check_supremacy($nom);
$selfpenalty=$selfsup*$suprecoef;
$frakass=$frakass*$fracoef;
 $life=$life*$lifecoef;
 $sex=$sex/$sexcoef;

 $keuf=check_special('keuf');
 
 $rd=rand(0,13);
 






 
 $karma=$karma+$frakass+$life-$sex-$selfpenalty;
 $hapenkarma=$hapenkarma+$hapenfrakass+$hapenlife-$hapensex-$hpenalty;
 
 
 // have a coup de poing amercain
 $idh=get_id($hapen);
$gun=check_point($id,'gun');
$gunh=check_point($idh,'gun');

if($gun)
{
echo "Vous sortez votre poing americain !  ";
$karma=$karma+1000;
}


if($gunh)
{
echo $hapen. " sort un point americain !  ";
$hapenkarma=$hapenkarma+1000;
}

 
?>
