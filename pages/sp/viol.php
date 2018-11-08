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
  <p>Vous sautez sur <?php echo $hapendead; ?> gisant sur le sol et vous commencez à baisser vos frocs tout en lui tenant la tête contre le sol. Vous sortez votre sexe en obligeant <b><?php echo $hapen; ?></b> &agrave; se taire, malgr&eacute; tout, vous faites un sacr&eacute; boucan. </p>
  <p>
 <?php 
 $endroit=$_SESSION['endroit'];
 require('pages/sp/violage.php'); ?>
 
  
  <?php 
  
  $m1="Je refait le noeud de ma cravatte et je me casse";
$v1=$retour;


$_SESSION['flashsene']='viol';

    ?>




   
<?php  ?>
 
























