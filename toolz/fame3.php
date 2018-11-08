<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>BLEKTRE</title>
<link rel="stylesheet" type="text/css" href="../style/blektre.css" />
<style type="text/css">

</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>

<body>



<p><?php

$in_fame = 1;
include("../include/variables.php");
$nom=$_GET['nom'];

 $verif='SELECT * FROM log WHERE player_name="'.$nom.'" ORDER BY id DESC;';
 
 
 
  $req=requete($verif);

  
?>


    <a href="fame.php">Go back</a> </p>
	
	  <?php  
	 $verif2='SELECT * FROM players WHERE nom="'.$nom.'";';
  $req2=requete($verif2);
  $data2 = mysqli_fetch_assoc($req2);
  
  
  $id=$data2['id'];
  $enceinte=check_point($id,'enceinte');
  
  $player=$data2['nom'];
  $score=$data2['best'];
  $road1=$data2['road1'];
  $retour=$data2['retour'];
  $road3=$data2['road3'];
  $road4=$data2['road4'];
  $life=$data2['life'];
  $karma=$data2['karma'];
  $money=$data2['money'];
  $frakass=$data2['frakass'];
  $sex=$data2['sex'];
  $place=$data2['place'];
  $fume=$data2['fume'];
  $time=$data2['time'];
	
	
	
	  $capitalbaston=$karma+($frakass*3)+($life*2)-$sex;
	
	 echo $nom.' ('.$place.') <br>capital baston:'.$capitalbaston;
	 
	
	 
	 
	 ?>
	<div id="Layer2" style="width:430px;"><?php 
	 $bio=mysqli_fetch_assoc(requete('SELECT bio FROM bio WHERE id_player='.$id.';'));
$bio=$bio['bio'];
$bio=nl2br($bio);
echo '<br><br>'.$bio.'';
	
	
	?></div>
	
	
<div align="left"></div>
<table width="450" border="0" cellpadding="0" cellspacing="5">
  <tr>

    <td width="308" bgcolor="#E9E9E9"><div align="center">ACTION</div></td>
    <td width="127" bgcolor="#E9E9E9"><div align="center">VALUE</div></td>
  </tr>
    
  <?php 
	  
$fils2=requete('SELECT * FROM family WHERE nom="'.$nom.'";');
  $parents= mysqli_fetch_assoc($fils2);
  $mere=$parents['mere'];
  $pere=$parents['pere'];
  
echo '<br><br>Fils de <a href="fame2.php?nom='.$mere.'">'.$mere.'</a> et <a href="fame2.php?nom='.$pere.'">'.$pere.'</a><br><br>';
	  
	  
	  while ($data = mysqli_fetch_assoc($req))
{

echo '<tr><td><div align="center">'.$data['time'].'.'.$data['objet'].'</td><td><div align="center">'.$data['value'].'</td>
</tr>';
} 




?>
  
</table>
    <p>&nbsp;</p>
  <div id="Layer1" style="position:absolute; left:494px; top:11px; width:360px; height:87px; z-index:1">
    <?php 
$road4=check_stat($nom);
$road4=$road4['road4'];
$v='check';
include ('flash.php'); 


?>
    <p align="center">SPECIAL RANKS </p>
    <p>&nbsp; </p>
    <table width="442" border="0">
      <tr bgcolor="#E6E6E6">
        <td width="136">RANK</td>
        <td width="162">&nbsp;</td>
        <td width="130">VALUE</td>
      </tr>
      <?php
   $ranks=requete('SELECT * FROM special WHERE player="'.$nom.'";');
 while ($rankdata = mysqli_fetch_assoc($ranks))
 {
 echo '<tr><td>'.$rankdata['nom'].'</td><td>'.$rankdata['title'].'</td><td>'.$rankdata['value'].'</td></tr>';
 }
  
  
  ?>
    </table>
    <p align="center">&nbsp;</p>
    <p align="center">FAMILY</p>
    <p align="center">&nbsp;</p>
<?php
	if($enceinte)
	{
	echo '[vous etes enceinte]';
	}
	
  $fils2=requete('SELECT * FROM family WHERE pere="'.$nom.'" AND nom<>"bebe";');
  $fils3=requete('SELECT * FROM family WHERE mere="'.$nom.'" AND nom<>"bebe";');


  ?>
    <div align="center">
      <table width="442" border="0">
        <tr bgcolor="#E6E6E6">
          <td width="136">FATHER</td>
          <td width="162">MOTHER</td>
          <td width="130">CHILD</td>
        </tr>
        <?php while ($parents=mysqli_fetch_assoc($fils2))
{

echo '<tr><td><a href="fame2.php?nom='.$parents['pere'].'">'.$parents['pere'].'</a></td><td><a href="fame2.php?nom='.$parents['mere'].'">'.$parents['mere'].'</a></td><td><a href="fame2.php?nom='.$parents['nom'].'">'.$parents['nom'].'</a></td></tr>';
} 
while ($parents=mysqli_fetch_assoc($fils3))
{

echo '<tr><td><a href="fame2.php?nom='.$parents['pere'].'">'.$parents['pere'].'</a></td><td><a href="fame2.php?nom='.$parents['mere'].'">'.$parents['mere'].'</a></td><td><a href="fame2.php?nom='.$parents['nom'].'">'.$parents['nom'].'</a></td></tr>';
} 




?>
      </table>

	  </p>
	  
	  <?php
	  // statoches

$timedscore=$score/$time;
echo "<br><br><br>Stats:<br><br><br>Rendement: ".$timedscore;
	  ?>
	  <p>Last ip'z</p>
      <p><?php $ipo=requete('SELECT ip FROM info WHERE player="'.$nom.'";');
	  
	  while($bitebite=mysqli_fetch_assoc($ipo))
	  {
	  echo $bitebite['ip'];
	  echo '<br>';
	  }
	  
	  
	  //acount
	  ?>
	  </p>
      <p>Account name</p>
      <p> 
        <?php
	  
	  $bite=requete('SELECT * FROM accounts WHERE char1="'.$nom.'" OR char2="'.$nom.'" OR char3="'.$nom.'";');
	  while($fuck=mysqli_fetch_assoc($bite))
	  echo $fuck['nom'];
	  ?>
      </p>
    </div>
</div>
</body>



</html>
