<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>


<title>BLEKTRE</title>
<link rel="stylesheet" type="text/css" href="../style/blektre.css" />
<style type="text/css">

</style>
</head>

<body>


  <p><?php

include("../include/connexion.php");

 $verif='SELECT * FROM players ORDER BY best DESC;';
  $req=requete($verif);
?>
    <a href="../index.php">Go back</a> </p>
  <p>[<a href="fameranks.php">SPECIAL RANKS</a>] </p>
  <p>Alive</p>
  <div align="center"></div>
  <table width="797" border="0" cellpadding="0" cellspacing="5">
  <tr>
  <td width="84" bgcolor="#EAEAEA"><div align="center">RANK</div></td>
    <td width="97" bgcolor="#EAEAEA"><div align="center">PLAYER</div></td>
    <td width="63" bgcolor="#E9E9E9"><div align="center">SCORE</div></td>
	<td width="53" bgcolor="#E9E9E9"><div align="center">KARMA</div></td>
	<td width="55" bgcolor="#E9E9E9"><div align="center">SEX APPEAL</div></td>
	<td width="52" bgcolor="#E9E9E9"><div align="center">MONEY</div></td>
	<td width="241" bgcolor="#E9E9E9"><div align="center">LOCATION</div></td>
	<td width="107" bgcolor="#E9E9E9"><div align="center">STATUS</div></td>
  </tr>

      <?php 
	  $rank=0;
	  
	  while ($data = mysqli_fetch_assoc($req))
{
	
	if ($data['life']<1)
		{
		$vie="DEAD";
		}
	else
		{
		$rank=$rank+1;
		$vie="ok";
		echo '<tr><td><div align="center">'.$rank.'</td><td><div align="center"><a href="fame2.php?nom='.$data['nom'].'">'.$data['nom'].'</a></td><td><div align="center">'.$data['best'].'</td><td><div align="center">'.$data['karma'].'</td>
	<td><div align="center">'.$data['sex'].'</td><td><div align="center">'.$data['money'].' e</td><td><div align="center">'.$data['place'].'</td><td><div align="center">'.$vie.'</td></tr>';
	} 
		}
		
		
	
?>








</table>

  <p>Dead</p>
  <table width="797" border="0" cellpadding="0" cellspacing="5">
  <tr>
  <td width="84" bgcolor="#EAEAEA"><div align="center">RANK</div></td>
    <td width="97" bgcolor="#EAEAEA"><div align="center">PLAYER</div></td>
    <td width="63" bgcolor="#E9E9E9"><div align="center">SCORE</div></td>
	<td width="53" bgcolor="#E9E9E9"><div align="center">KARMA</div></td>
	<td width="55" bgcolor="#E9E9E9"><div align="center">SEX APPEAL</div></td>
	<td width="52" bgcolor="#E9E9E9"><div align="center">MONEY</div></td>
	<td width="241" bgcolor="#E9E9E9"><div align="center">LOCATION</div></td>
	<td width="107" bgcolor="#E9E9E9"><div align="center">STATUS</div></td>
  </tr>

      <?php 
	  $rank=0;
	  
	  $verif2='SELECT * FROM players ORDER BY best DESC;';
  $req=requete($verif2);
	  while ($data = mysqli_fetch_assoc($req))
{
	
	if ($data['life']<1)
		{
		$rank=$rank+1;
		$vie="DEAD";
		echo '<tr><td><div align="center">'.$rank.'</td><td><div align="center"><a href="fame2.php?nom='.$data['nom'].'">'.$data['nom'].'</a></td><td><div align="center">'.$data['best'].'</td><td><div align="center">'.$data['karma'].'</td>
	<td><div align="center">'.$data['sex'].'</td><td><div align="center">'.$data['money'].' e</td><td><div align="center">'.$data['place'].'</td><td><div align="center">'.$vie.'</td></tr>';
		}
	else
		{
		$vie="ok";
		
	} 
		}
		
		
	
?>







</table>




  <p>B&eacute;b&eacute;s en stock:</p>
<?php
$bebe=mysqli_fetch_assoc(requete('SELECT COUNT(child_id) FROM family WHERE nom="bebe";'));
$bebe=$bebe['COUNT(child_id)'];
echo $bebe;
?>
  <p></p>
</body>

</html>
