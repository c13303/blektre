
<?php

 include("include/panel.php"); 


$drogue=check_title('dealer');
$q=clean($_GET['entree']);
$qt=check_bag($id,"drogue");
if($q<0) $q=0;
if($q>$qt)
{
$q=$qt;
}
?>

<div id="texte">



  <p>Vous fumez <?php echo $drogue; ?>. Tout commence à flageoller autour de vous et vous vous mettez à rire comme un débile, tout seul. </p>
    <?php
	$q2=$q/2;
	

update_stat($nom,'frakass','+'.$q2);
in_log($nom,'Vous fumez '.$drogue,'Sale junky');
no_bag($id,"drogue",$q);


$m4="Yes cool cool";
$v4=$retour;




if($frakass>150)
{
echo "<p>Vous êtes accro!!</p>";
if(!$isjunky)
	{
	in_point($id,'junky');
	in_log($nom,'Vous devenez accro','junky');
	}
}
$_SESSION['flashsene']='droguefumette';

    ?>
  </p>
 
<?php  ?>

 
