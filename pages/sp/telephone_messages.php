
<?php

 include("include/panel.php"); 
$corres=$_GET['entree'];
$msg=$_GET['entree2'];
$date = date("d-m-Y");
$heure = date("H:i");



?>

<div id="texte">



    <?php
   $all=requete('SELECT * FROM messagerie WHERE player="'.$nom.'";');
   
 
   while ($data=mysqli_fetch_assoc($all))
   {$data['message']=$data['message'];
 echo "Message de: ".$data['from']."    ".$data['heure'];
 echo "<br><br>".$data['message'];
 echo "<br>-------------------------------------------<br><br>";
 }
   if (!$all)
   {
   echo "Vous n'avez pas de messages. Vous n'avez sans doute pas d'amis.";
   }
 
 no_point($id,'message');
 
$entree='';
$entree2='';
$m3="J'efface mes messages";
$v3='sp/telephone_messages_flush';

$m4="J'appelle quelqu'un";
$v4='sp/telephone_appel'; 

$m5="Je raccroche";
$v5=$retour; 





    ?>
  </p>
 
<?php $_SESSION['flashsene']='telephone';
 ?>
 
