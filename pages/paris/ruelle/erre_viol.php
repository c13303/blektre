<?php  require("include/panel.php");
 
 $hapen=$_SESSION['hapen'];
 
 
 $isdead=requete('SELECT life FROM players WHERE nom="'.$hapen.'";');
  while ($data = mysqli_fetch_assoc($isdead))
{


  if ( $data['life']<1 )
  {
 $hapendead="le cadavre de ".$hapen;
  } else
  {
  $hapendead=$hapen;
  }
}
 
 
 
 ?><div id="texte">
  <p>Vous sautez sur <?php echo $hapendead; ?> gisant sur le sol et vous commencez � baisser vos frocs tout en lui tenant la t�te contre la moquette. Vous sortez votre sexe en obligeant <b><?php echo $hapen; ?></b> &agrave; se taire, malgr&eacute; tout, vous faites un sacr&eacute; boucan. </p>
  <p>
 <?php 
 $endroit="dans la rue des voyous";
 require('pages/sp/violage.php'); ?>
 
  
  <?php $m1="Je retourne vaquer dans la ruelle";
$v1="paris/ruelle/erre";
$m3="Je crisse mon camp";
$v3="paris/_street/streetest";


    ?>




   
<?php 
$_SESSION['flashsene']='viol';
 ?>
 













