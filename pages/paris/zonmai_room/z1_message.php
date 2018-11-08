<?php

 include("include/panel.php"); 

?>
<div id="texte">
 
  <p>Vous contemplez vos pieds de façon perplexe. Auriez perdu le sens du bon délire ?    </p>
  
  <?php 
  
  

  
  
  
  
  
$m1="Je roule un c&ocirc;ne";
$v1="paris/zonmai_room/z1_room_bedo";
$m2="J'appelle le patron";
$v2="paris/zonmai_room/z1_boss";
$drug=check_bag($id,"drogue");
if($drug)
{
$m3="Je me drogue";
$v3="sp/sp_drogue";
}
$m5="Je m'habille en speed et je me tire";
$v5="paris/_street/street"; 
  ?>
  
  
  
</p>
 
<?php 

$_SESSION['flashsene']='message';
 



?>

 



