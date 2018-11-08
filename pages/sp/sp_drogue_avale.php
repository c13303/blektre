
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



  <p>Vous faites une ligne. Après quelques instants, vous vous dites que lol, trop fort, vous sentez la montée. Une subite envie de vous ballader avec le froc sur les genoux vous submerge, mais vous vous retenez. </p>
    <?php
	$q2=$q/2;
	
update_stat($nom,'life','+'.$q2);	
update_stat($nom,'frakass','+'.$q);
in_log($nom,'Vous sniffez '.$drogue,'Sale junky');
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


$_SESSION['flashsene']='drogue';
    ?>
  </p>


 
