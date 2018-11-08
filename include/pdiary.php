<?php header('Content-Type: text/html; charset=iso-8859-1'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Blektre</title>
<link rel="stylesheet" type="text/css" href="../blektre.css" />
</head>

 <body>
  <?php
  
  $nom=$_GET['nom'];
require('connexion.php');
  $verif='SELECT * FROM log WHERE player_name="'.$nom.'" ORDER BY id DESC;'; 
  $req=requete($verif);
  $bite=0;
  while ($data = mysqli_fetch_assoc($req))
  {
  echo '<a href="../toolz/fame2.php?nom='.$data['player_name'].'">'.$data['player_name'].'</a> : '.$data['objet'];
  echo "<br>";
  $bite=$bite+1;
  if ($bite>50)
  {
  exit;
  }

  }
  
  
  
  ?>