<?php  $action3='place="zonmai"';
 require("include/panel.php");
 
 $hapen=$_SESSION['hapen'];
 
 
 $isdead=requete('SELECT life FROM players WHERE nom="'.$hapen.'";');
  while ($data = mysqli_fetch_assoc($isdead))
{


  if ( $data['life']<1 )
  {
 $hapendead="le cadavre de ".$hapen;
  }
  else
  {
  $hapendead=$hapen;
  }
}
 
 
 
 ?><div id="texte">
  <p>Vous sautez sur <?php echo $hapendead; ?> gisant sur le sol et vous commencez à baisser vos frocs tout en lui tenant la tête contre le sol. Vous sortez votre sexe en obligeant <b><?php echo $hapen; ?></b> &agrave; se taire, malgr&eacute; tout, vous faites un sacr&eacute; boucan. </p>
  <p>
 <?php 
 $endroit="à la zonmai";
 require('pages/sp/violage.php'); ?>
 
  
  <?php $m1="Je vais mater la télé";
$v1="paris/zonmai/zonmai_tele";
$m2="Je sors";
$v2="paris/_street/street";



$_SESSION['flashsene']='viol';
 ?>
 























