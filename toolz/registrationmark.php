<?php session_start(); 
if($_GET['pass']=='godemoi') $_SESSION['admin']=1;
if($_GET['attente']=='1') $_SESSION['attente']=1;
if($_GET['attente']=='0') $_SESSION['attente']=0;

if($_SESSION['admin']!=1) exit('lol');



?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<link rel="stylesheet" type="text/css" href="../blektre.css" />
<style type="text/css">
<!--

-->
</style>
</head>

<body>
<p>afficher <a href="registrationmark.php?attente=1">attente</a> / <a href="registrationmark.php?attente=0">valid&eacute;s</a></p>
<p>
  <?php
if($_SESSION['attente']!=1) echo 'COMPTES ACTIFS'; else echo 'COMPTES ATTENTE';
$id=$_GET['id'];
$action=$_GET['action'];
$email=$_GET['email'];
include('../include/connexion.php');

// CHECK IF ACTIVATED
if($id&&$action=="valider")
{

		requete('UPDATE accounts SET active=1 WHERE id="'.$id.'";');
		$pr=mysqli_fetch_assoc(requete('SELECT * FROM accounts WHERE id="'.$id.'";'));
		$passss=$pr['password'];
		mail($pr['email'], "Blektre activation", "Votre account ".$pr['nom']." a ete valide, petit pitre!
		
		mot de passe: ".$passss."
		
		http://kanar.ci0.org/blektre ", "From: blektre@blektre.info");
		
		echo 'Account active.';
				
}

if($id&&$action=="effacer")
{

		requete('DELETE FROM accounts WHERE id="'.$id.'";');
			
		echo 'Account efface.';
				
}



echo '<table width="1000" border="1">';
if($_SESSION['attente']==1) $inactives=requete('SELECT * FROM accounts WHERE active=0;');
if($_SESSION['attente']==0) $inactives=requete('SELECT * FROM accounts WHERE active=1;');

while($popo=mysqli_fetch_assoc($inactives))
{
$n++;
echo '<tr>
    <td>'.$n.'</td><td>'.$popo['email'].'</td>
    <td>'.$popo['nom'].'</td>
	<td>'.$popo['password'].'</td>
	<td width="500">'.$popo['motive'].'</td>
    <td> <a href="registrationmark.php?id='.$popo['id'].'&action=valider">valider</a> </td><td> <a href="registrationmark.php?id='.$popo['id'].'&action=effacer">effacer</a></td>
  </tr>
  
  ';
}


?>
  
  
  </table>
  
  
</p>
</body>