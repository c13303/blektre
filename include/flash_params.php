<?php

require('include/flash_variables.php');
 
  
  
  $signal="GO"; 

$furl='FUCK/_BLEKTRE.swf';

  ?>
 
<input type="hidden" name="signal" id="signal" maxlength="45" value="<?php echo $signal; ?>">


  <input type="hidden" name="nom" id="nom" maxlength="45" value="<?php echo $fnom; ?>">
  <input type="hidden" name="skin1" id="skin1" maxlength="45" value="<?php echo $skin1; ?>">
   <input type="hidden" name="skin2" id="skin2" maxlength="45" value="<?php echo $skin2; ?>">
	<input type="hidden" name="skin3" id="skin3" maxlength="45" value="<?php echo $skin3; ?>">
   <input type="hidden" name="skin4" id="skin4" maxlength="45" value="<?php echo $skin4; ?>">
    <input type="hidden" name="perso2" id="perso2" maxlength="45" value="<?php echo $perso2; ?>">
  <input type="hidden" name="perso3" id="perso3" maxlength="45" value="<?php echo $perso3; ?>">
   <input type="hidden" name="perso4" id="perso4" maxlength="45" value="<?php echo $perso4; ?>">
	<input type="hidden" name="fapen" id="fapen" maxlength="45" value="<?php echo $fapen; ?>">
<input type="hidden" name="hapenskin" id="hapenskin" maxlength="45" value="<?php echo $hapenskin; ?>">
	   <input type="hidden" name="opt1" id="opt1" maxlength="45" value="<?php echo $opt1; ?>">
   <input type="hidden" name="opt2" id="opt2" maxlength="45" value="<?php echo $opt2; ?>">
  <input type="hidden" name="opt3" id="opt3" maxlength="45" value="<?php echo $opt3; ?>">
  <input type="hidden" name="bonus1" id="bonus1" maxlength="45" value="<?php echo $bonus1; ?>">
  <input type="hidden" name="bonus12" id="bonus12" maxlength="45" value="<?php echo $bonus12; ?>">
  <input type="hidden" name="bonus2" id="bonus2" maxlength="45" value="<?php echo $bonus2; ?>">
  <input type="hidden" name="bonus22" id="bonus22" maxlength="45" value="<?php echo $bonus22; ?>">
    <input type="hidden" name="bonus1" id="malus1" maxlength="45" value="<?php echo $malus1; ?>">
  <input type="hidden" name="malus12" id="malus12" maxlength="45" value="<?php echo $malus12; ?>">
  <input type="hidden" name="malus2" id="malus2" maxlength="45" value="<?php echo $malus2; ?>">
  <input type="hidden" name="malus22" id="malus22" maxlength="45" value="<?php echo $malus22; ?>">



<?php
if($f)
$_SESSION['flashsene']=$f;

?>
  <input type="hidden" name="sene" id="sene" maxlength="45" value="<?php echo $_SESSION['flashsene']; ?>">

 

