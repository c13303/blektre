<?php




 $action1='';
$action2='retour="paris/_street/street"';
$action3='place="Sud de la ville"';
$fplace='sud_present';
$_SESSION['rue']='street';
include("include/panel.php"); 

$what=check_point($id, 'branlefenetre');
if($what)

{
no_point($id,'branlefenetre');
include("pages/paris/parisiens/parisien_rue.php");
include('include/exit.php');
}

 ?><div id="texte">
 
 
 <?php
 
  $pub=check_special('pub');
  $pub=check_title('pub');
  $tube=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="tube";'));
 
 
 
echo "<br/>
Vous filez au volant de votre Lada tunée, avec <b>".$tube['title']."</b> de <b>".$tube['player']."</b> à donf dans l'autoradio, entre deux publicités. 

<p> <<-".$pub.">> </p>

Vous êtes dans le sud de la ville, le quartier residentiel. 
";


$hapen=$present;
if ($hapen)
{echo $present."  vous dépasse dans sa voiture ridicule, et arbore un air de suffisance assez irritant.<br/>";
requete('UPDATE `players` SET place="Est de la ville" WHERE nom = "'.$hapen.'" LIMIT 1;');
  
  $m1='Je frime de même';
$v1="paris/_street/streetdissident";
$m2="Je continue dans le quartier";
$v2="paris/_street/street";
$m4="Je mets Skyrock et je trace ma route, tel K2000";
$v4="paris/_street/streetest";

  
}


else
{


  $m1="Je rentre à la zonmai";
$v1="paris/zonmai/zonmai";
  $m2='Je vais au boulot';
$v2="paris/boulot/boulot2";
$v3="paris/maman/chezmaman";
$m3="Je vais chez ma mere";
$v4="paris/_street/streetcenter";
$m4="Je vais au centre de la ville";
$m5="Je vais à l'est de la ville, le quartier hot";
$v5="paris/_street/streetest";

}
$entree='';
  ?>

  


   
<?php 
$_SESSION['flashsene']='street_sud';
$fapen=$hapen;
$opt1=$tube['title'];
 ?>

 














