<?php  $action3='place="chez josiane"';
 require("include/panel.php");
 
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
  <p>Vous sautez sur <?php echo $hapendead; ?> gisant sur le sol et vous sortez votre sexe brutalement. </p>
  <p>
<?php 
$endroit="chez Josiane";
require('pages/sp/violage.php');   
  
?>

  
  <?php 
   $m1="Je resonne &agrave; la porte";
$v1="paris/josiane/chezjosiane";


$m3="Je me tire";
$v3="paris/_street/streetnord";
  
    ?>



</p></form>

   
<?php 
$_SESSION['flashsene']='viol';
 ?>
 
























