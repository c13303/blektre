
<?php

 $action1='place ="hopital"';
$action2='retour="paris/hopital/6hopital"';

include("include/panel.php"); 
$hapen=check_special('docteur');

?>

<div id="texte">

  <p>- Tr&egrave;s bien.<br>
    <br>
    Le docteur <b><?php echo $hapen; ?></b> vous enfonce un dernier dart dans le cul ..... Tout s'assombrit ..
  </p>

  <?php
  $rodi='"euthanasié par le docteur '.$hapen.'"';
set_stat($nom,'road1',$rodi);
	in_log($nom, 'Vous vous faitez euthanasier par le docteur '.$hapen, 'pauvre type');
	in_log($hapen, 'Vous euthanasiez '.$nom, 'corrompu');
	update_stat($hapen,'money','+'.$money);
	set_stat($nom,'money',0);
set_stat($nom,'life',-1);
	

	$m5='...';
	$v5='paris/_street/streetnord';
	
	
	
	
	
	
	
	
	
	







$perso2=check_special('docteur');
$_SESSION['flashsene']='6docteur';


 ?>

 
