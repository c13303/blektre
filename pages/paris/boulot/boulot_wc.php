<?php




 $action1='life=life-1';
$action2='karma=karma+30';
$action3='place="bureau"';


include("include/panel.php"); 

$bonus1="karma";
$malus1="life";

 ?>
<div id="texte">
  <p>Vous d&eacute;foncez la porte des toilettes et lâchez tout ce que vous pouvez. </p>
  <p>C'est pas possible, vous devez avoir une gastro, ou bien alors c'est le regime grec sauce blanche harissa que vous tenez depuis d&eacute;cembre dernier qui vous bousille le ventre &agrave; petit feu. Quoiqu'il en soit, vous vous sentez encore crisp&eacute; apr&egrave;s avoir d&eacute;roul&eacute; les rouleaux de papier des trois cabinets, et sentez que vous n'&ecirc;tes pas &agrave; l'abri.</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  <?php 
  

  

$hapen=$present;

if ($hapen)
{  echo $present."  se trouve dans le couloir quand vous sortez, et semble pouffer de rire.<br/>";
$m1="Je l'ignore et vais prendre un café pour oublier tout ca";
$v1="paris/boulot/cafe";
$m2="Je l'ignore et vais bosser mon dossier";
$v2="paris/boulot/bureau";
$m3="Je le chope et je le fume";
$v3="paris/boulot/bureau_fume";
}
else

{

$m1="Je vais prendre un café pour oublier tout ca";
$v1="paris/boulot/cafe";
$m2="Je vais bosser mon dossier";
$v2="paris/boulot/boulot_dossier2";

}

$drug=check_bag($id,"drogue");
if($drug)
{
$m4="Je me drogue";
$v4="sp/sp_drogue";
}




// chouicess
  
  
  $_SESSION['flashsene']='wcvide';
  
    ?>



 














