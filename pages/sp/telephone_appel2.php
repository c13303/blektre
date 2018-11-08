
<?php

 include("include/panel.php"); 
$corres=$_GET['entree'];
$msg=$_GET['entree2'];
$msg=clean($msg);
//$msg=utf8_decode($msg);
 $corres=clean($corres);
$corres=strtolower($corres);
$corres=ucfirst($corres);

$date = date("d-m-Y");
$heure = date("H:i");





?>

<div id="texte">



  <p>- "<?php echo $msg; ?> "</p>
  <p>&nbsp;</p>
  <p>Voila le message que vous avez laiss&eacute; sur le r&eacute;pondeur de <?php echo $corres; ?>
    <?php
   $all=mysqli_fetch_assoc(requete('SELECT nom FROM players WHERE nom="'.$corres.'";'));
   if ($all)
   {
   requete('INSERT INTO messagerie VALUES ("'.$corres.'","'.$nom.'","'.$msg.'", "'.$date.' '.$heure.'");');
   in_log($nom,'Vous téléphonez à '.$corres,'coquinou');
   in_log($corres, 'Vous avez un message','tel');
   
   $idc=get_id($corres);
   if(!check_point($idc,'message'))
   {   
   in_point($idc,'message');
   }
   
   $account=mysqli_fetch_assoc(requete('SELECT email FROM accounts WHERE char1="'.$corres.'" OR char2="'.$corres.'" OR char3="'.$corres.'";'));
   $email=$account['email'];
   
   
   mail($email, "Blektre message", $corres.":Vous avez recu un message sur votre répondeur. http://kanar.ci0.org/blektre ", "From: blektre@ardkor.com");
   
}
else
{
echo "Il n'y a personne a ce numéro.";
}
$entree='';
$entree2='';
$m3="J'écoute mes messages";
$v3="sp/telephone_messages";
$m5="Je raccroche";
$v5=$retour; 





    ?>
  </p>
 
<?php $_SESSION['flashsene']='telephonep';
 ?>

 
