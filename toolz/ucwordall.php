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
	echo '<h1>ACCOUNTS</h1>';
$aks=requete('SELECT * FROM accounts');
while($aksdata=mysqli_fetch_assoc($aks))
	{
	$newchar1=ucwords(strtolower($aksdata['char1']));
	echo $aksdata['char1'].'->'.$newchar1.'<br/>';
	
	$newchar2=ucwords(strtolower($aksdata['char2']));
	echo $aksdata['char2'].'->'.$newchar2.'<br/>';
	
	$newchar3=ucwords(strtolower($aksdata['char3']));
	echo $aksdata['char3'].'->'.$newchar3.'<br/>';
	
	
	}
	
		echo '<h1>FAMILY</h1>';
	
$fam1=requete('SELECT * FROM family');
while($fam=mysqli_fetch_assoc($fam1))
	{
	$newnom=ucwords(strtolower($fam['nom']));
	echo $fam['nom'].'->'.$newnom.'<br/>';
	
	$newnom2=ucwords(strtolower($fam['pere']));
	echo $fam['pere'].'->'.$newnom2.'<br/>';
	
	$newnom3=ucwords(strtolower($fam['mere']));
	echo $fam['mere'].'->'.$newnom3.'<br/>';
	
	
	}
	echo '<h1>MESSAGERIE</h1>';
	
	
$mess=requete('SELECT * FROM messagerie');
while($mes=mysqli_fetch_assoc($mess))
	{
	$newnom=ucwords(strtolower($mes['player']));
	echo $mes['player_name'].'->'.$newnom.'<br/>';

	$newnom2=ucwords(strtolower($mes['from']));
	echo $mes['from'].'->'.$newnom2.'<br/>';
	
	}
	
		echo '<h1>LOG</h1>';
	
$logg=requete('SELECT * FROM log');
while($log=mysqli_fetch_assoc($logg))
	{
	$newnom=ucwords(strtolower($log['player_name']));
	echo $log['player_name'].'->'.$newnom.'<br/>';

	
	
	}
	
			echo '<h1>PLAYERS</h1>';
	
$ppp=requete('SELECT * FROM players');
while($ppp2=mysqli_fetch_assoc($ppp))
	{
	$newnom=ucwords(strtolower($ppp2['nom']));
	echo $ppp2['nom'].'->'.$newnom.'<br/>';

	
	
	}

			echo '<h1>RELATIONSHIP</h1>';
	
$rr=requete('SELECT * FROM relationship');
while($rrr=mysqli_fetch_assoc($rr))
	{
	$newnom=ucwords(strtolower($rrr['player']));
	echo $rrr['player'].'->'.$newnom.'<br/>';

	
	$newnom2=ucwords(strtolower($rrr['player2']));
	echo $rrr['player2'].'->'.$newnom2.'<br/>';
	}


	echo '<h1>SPECIAL</h1>';
	
$special=requete('SELECT * FROM special');
while($spe=mysqli_fetch_assoc($special))
	{
	$newnom=ucwords(strtolower($spe['player']));
	echo $spe['player'].'->'.$newnom.'<br/>';

	
	}



?>
  <p></p>
</body>

</html>
