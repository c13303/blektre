<?php session_start(); 
if($_GET['foutre']=='oui') $_SESSION['admin']=1;

if($_SESSION['admin']!=1) exit('lol');

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>


<title>BLEKTRE PANEL</title>
<link rel="stylesheet" type="text/css" href="../style/blektre.css" />
<style type="text/css">

</style>
</head>
<body>
<p>B L E K T R E    <br />
Control Panel Center </p>
<p>&nbsp;</p>
<p><a href="voyante_pedia.php">Voyante Control Center</a> - <a href="statz.php">Stats  </a>- <a href="yshout/history.php">Historique du chat </a>- <a href="yshout/admincp.php">Admin Chat</a> - <a href="https://admin.1and1.fr/">1&amp;1 </a>- <a href="registrationmark.php">CONTROL ACCOUNTS</a></p>
<p>&nbsp;</p>
<p><a href="fame3.php">all ABOUT : </a></p>
<form method="get" action="fame3.php">

<input type="text" id="nom" name="nom"/>
<input type="submit" />
</form>
</p>
</body>
</html>
