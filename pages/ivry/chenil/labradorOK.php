<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php

$action1='money = money - 2000';
$action2='best = best +250 ';
include("include/panel.php"); 





if($present)$hapen=$present;
$chien=check_special('chien');$perso2=$chien;
update_stat($chien,'money','+2000');
in_log($nom,$chien.' devient votre clébard','+250 pts');
in_log($chien, 'Vous vendez vos services à '.$nom, '2000 euros');
in_point($id,'labrador');
no_point($id,'looklabrador');

?>

<div id="texte">

<p><?php echo $chien; ?> se met &agrave; japper comme un gros con. </p>
<p>- Vous ne serez pas d&eacute;&ccedil;u !! dit-il en vous donnant sa carte de Labrador. Appellez moi quand vous serez chez vous, j'accourerais. </p>
<p>Vous &ecirc;tes dr&ocirc;lement content de votre cl&eacute;bard. </p>
<p>
  <?php

	
	


$m5="Je m'en vais, joyeux et gai";
$v5=$_SESSION['rue']; 

$_SESSION['flashsene']='chenil';


 ?>
</p>
